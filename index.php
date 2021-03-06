<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Dolce Vita | Doces e Salgados</title>
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Roboto:300,400" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="fold.css">
    <script src="main.js" defer></script>

    <?php 
if(isset($_POST['submit'])){
    $to = "email@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
</head>
<body>
    <header>
        <h1>La Dolce Vita</h1>
    </header>

    <article class="desktop_mid_container">
        <div class="cover_img" id="salgados_imgs">
            <div id="coxinha_img"></div>
            <div id="empada_img"></div>
            <div id="kibe_img"></div>
            <div id="torta1_img"></div>
            <div id="coxinha2_img"></div>
        </div>
        <div class="h2_box green_h2">
            <h2>Salgados</h2>
        </div>
    
        <ul class="products_list salgadinhos">
            <li>Coxinha</li>
            <li>Empadinha</li>
            <li>Rissoles</li>
            <li>Bolinha de Queijo</li>
            <!-- <li>Opções Ovo-lacto Vegetarianas</li> -->
            <li>Torta de palmito</li>
        </ul>
    
        <div class="cover_img"  id="doces_imgs">
            <div id="brigadeiro_img"></div>
            <div id="estrela_img"></div>
            <div id="brigadeiro2_img"></div>
            <div id="brigadeiro3_img"></div>
            <div id="brigadeiro4_img"></div>
        </div>
        <div class="h2_box sweet_h2">
              <h2>Doces</h2>
        </div>
        
        <ul class="products_list doces">
            <li>Brigadeiro</li>
            <li>Brigadeirão</li>
            <li>Beijinho</li>
            <li>Cajuzinho</li>
            <li>Pão de Mel</li>
            <li>Quindim</li>
        </ul>

        <h2 class="mid_h2">Fale Conosco</h2>

        <form action="send-email.php" method="POST" id="form">
            <label for="nome">Nome</label>
            <input type="text" name="nome">

            <label for="contact">E-mail ou Telefone</label>
            <input type="text" name="contact_form">

            <label for="message">Deixe sua Mensagem</label>
            <textarea name="message"></textarea>

            <input type="submit" name="send" id="enviar" value="Enviar">
        </form>
    </article>

    <section class="contact">
        <h3>Produzimos doces e salgados caseiros sob encomenda</h3>
        <h4>a partir de 50 un. congeladas para São Paulo e região</h4>

        <div class="media_span">
            <span id="before_local">Taboão da Serra - SP</span>
                <div class="divisor"></div>
            <span id="before_tel">9 5137-8599</span>
                <div class="divisor"></div>
            <span id="before_email">claudiaciappina@gmail.com</span>
                <div class="divisor"></div>
            <span id="before_insta">@ladolcevita_salgados</span>
        </div>

        <a href="https://wa.me/5511951378599" target="_blank">Pedir pelo WhatsApp</a>
    </section>
</body>
</html>