
<?php 
            if (!empty($_POST))  {
                $returnMessage = buildContactMessage();
                writeInBdd($_POST);
            
                echo '<article><h2>Merci d\'avoir pris contact</h2>'.$returnMessage;
            }else{
                echo 'une erreur est surenue';
            }
            
            function buildContactMessage()
            {
                $returnMessage = 'Date de dépot : ' . date('d/m/y H:i:s') . '<br/>' . PHP_EOL;
            
                if(isset ($_POST['name']) && isset($_POST['firstName']) && isset($_POST['email']) && isset($_POST['message'])) {
                    
                    
                    $name = htmlentities($_POST['name']);
                    $firstName = htmlentities($_POST['firstName']);
                    $email = htmlentities($_POST['email']);
                    $message = htmlentities($_POST['message']);
                    $returnMessage .= 'Message bien envoyé !</br> Merci ' . $firstName.' '.$name. ' de m\'avoir envoyé ce message : "'.$message.
                    '"\nJ\'ai bien reçu ton adresse mail : "'.$email.'". \nJ\'y répondrais le plus vite possible, à bientôt !</article>' . PHP_EOL;
                }            
                return $returnMessage;
            }
            

            
            //send the buildContactMessage return in bdd     
            function writeInBdd()
            {
                require_once '../../../../bdd/connexion_bdd_inline.php'; 
                    
                try{
                    //connexion BDD
                    $pdo = new PDO("mysql:host=$servname;dbname=$dbname",$user,$pass);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    $format_name = "^[A-Za-z '-]{2,}+$^";
                    $format_fisrstName ="^[A-Za-z '-]{2,}+$^";
                    $format_email ="^[A-Za-z-.'-]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$^";
                    $format_message = "^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\.\'\"\-\s]{5,1000}$^";
                    if(!preg_match($format_name, $_POST['name']))  throw new Exception("Le paramètre nom ne correspond pas au format attendu");
                    if(!preg_match($format_fisrstName, $_POST['firstName']))  throw new Exception("Le paramètre prénom ne correspond pas au format attendu");
                    if(!preg_match($format_email, $_POST['email']))  throw new Exception("Le paramètre email ne correspond pas au format attendu");
                    if(!preg_match($format_message, $_POST['message']))  throw new Exception("Le paramètre message ne correspond pas au format attendu");
                    
                    $name = $_POST['name'];
                    $firstName = $_POST['firstName'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];

                    //received Datas insertion 
                    $sth = $pdo->prepare("
                        INSERT INTO basue_form(name, firstName, email, message)
                        VALUES (:name, :firstName, :email, :message)
                        ");
                        $sth->bindParam(':name', $name);
                        $sth->bindParam(':firstName', $firstName);
                        $sth->bindParam(':email', $email);
                        $sth->bindParam(':message', $message);
                        $sth->execute();
            
                }
                catch(PDOException $e){
                  die( '<article>Erreur : '.$e->getMessage().'</article>');
                }
                catch(exception $e){
                    die('<article>Erreur : ' .$e->getMessage().'</article>');
                }
            }