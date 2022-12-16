<?php
require_once "connections.php";

    // if(isset($_GET['update']))
    // {
    //     $user_id = $_GET['user_id'];
    // } else 
    // {
    //     $user_id = null;
    //     http_response_code(400);
    //     exit('PARAMETER EXPECTED');
    // }
    
    function adminMenu()
    {
        $line = "| <a href='user_add.php'>Įdėti klientą</a> | ";
        $line .= "<a href='user_list.php'>Aktyvių sąrašas</a> | ";
        $line .= "<a href='user_list.php?deleted=1'>Ištrintieji</a> | ";
        return $line;
    }
    function questionList() 
    {
        $questions = getAll('questions'); 
        // $questions = $questions[0];
        $content = '';
        for($i=0; $i < count($questions); $i++) 
        {
        $content .= "
                        <tr>
                        <td>{$questions[$i]['chapter_nr']}</td>
                        <td>{$questions[$i]['section_nr']}</td>
                        <td>{$questions[$i]['question_nr']}</td>
                        <td><input type='text' name='question' value='{$questions[$i]['question']}' width=500></td>
                        </tr>
                        ";
        }
        return $content;
    }
    
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <title><?=env('APP_NAME', 'Coutching');?></title>
        <link rel="stylesheet" href="./resources/css/main.css">
        <link rel="stylesheet" href="./resources/css/navigation.css">
        <style>
            table {
                text-align: center;
                font-size: 12px;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid #ddd;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            input {    
                width: 500px;
                height: 16px;
            
                border: 2px solid #999;                
            }
                   
        </style>
    </head>
    <body>
        <header>
            <?php include_once 'nav.php'; ?>
        </header>
        <main>
            <section>
                <?=adminMenu();?>
            </section>
            <section>
                <form action='questions.php?update=1' method="POST">
                <table border="1">
                    <tr>
                        <td>Skyrius</td>
                        <td>Poskyris</td>
                        <td>Kl.Nr.</td>
                        <td width='500'>Klausimas</td>
                    </tr>
                <?=questionList();?>
                </table>
                    <div style="font-size: 12px">*Poskyris = 0 - atviri klausimai</div>
                    <input type='submit' value='Atnaujinti'>
                </form>
            </section>
        </main>
        <footer>
            <div id="footer">
                <?=$footer;?>
            </div>            
        </footer>
    </body>
    </html>
