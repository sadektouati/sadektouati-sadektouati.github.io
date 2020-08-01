<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width initial-scale=1">
	<meta charset="UTF-8">
	<title>entreprise</title>
	<script type="text/javascript" src="main.js?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '/main.js');?>" defer></script>
<style>body{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif;padding:0;margin:0;display:grid;grid-template-columns:auto;}body *{vertical-align:middle;box-sizing:border-box;margin:0;background-repeat:no-repeat;background-position:50%;background-size:cover;line-height:1.7;letter-spacing:.02em}body>*{margin:0 0 1rem}a{line-height:inherit;vertical-align:baseline}.a:focus,.a:hover{color:orange}.a:ative{color:#ff4500;cursor:crosshair}::-webkit-input-placeholder{color:#afaeae;font-size:.8em;line-height:1.6em;font-family:arial;font-weight:400}::-moz-placeholder{color:#afaeae;font-size:.8em;line-height:1.6em;font-family:arial;font-weight:600}:-ms-input-placeholder{color:#afaeae;font-size:.8em;line-height:1.6em;font-family:arial;font-weight:600}input:focus:enabled:-moz-placeholder,input:focus:enabled:-ms-input-placeholder,input:focus:enabled::-moz-placeholder,input:focus:enabled::-webkit-input-placeholder,input:hover:enabled:-moz-placeholder,input:hover:enabled:-ms-input-placeholder,input:hover:enabled::-moz-placeholder,input:hover:enabled::-webkit-input-placeholder{color:#dcc0b1}.images__container{position:relative;padding:0 0 54%;width:100%;overflow:hidden;background-image:url(image-is-loading.svg);background-size:10%;margin:0 0 1rem;background-color:#d9dcec}.images__container--loaded{background:0 0;border:none}.images__container--logo{padding:0;height:5rem;margin:0;max-height:5rem}img{display:block;width:100%;height:100%;-o-object-fit:cover;object-fit:cover}.images__container img{position:absolute;left:0;top:0;visibility:hidden;opacity:0;transition:opacity .5s ease-out}.images__container--loaded img{visibility:visible;opacity:1}.images__container__logo{width:auto;max-width:100%;height:100%;margin:0 auto;left:50%!important;transform:translate(-50%)}.main-form{display:flex;flex-flow:column;width:85%;max-width:30rem;margin:0 auto}.main-form__title{padding:0;margin:0 0 1rem;font-size:1.9rem;font-weight:800;font-family:Helvetica,Arial,sans-serif;text-align:center;color:#ef0000}.main-form__email,.main-form__submit{color:grey;outline:0;transition:border .3s;background-position:100%;background-size:1.25em;display:inline-block;padding:.3em .5em;border:1px solid #b7b7b7;border-radius:2px;width:100%;max-width:20rem;line-height:2;font-size:1.1rem;margin:0 auto 1rem}.main-form__email:focus,.main-form__email:hover{border:1px solid #afacac}.main-form__submit{background-position:50%;background-color:#ef0000;color:#fff;line-height:1.5;border:1px solid #ef0000;max-width:13rem;font-size:1rem}.processing{transition:all .4s ease-in;background-image:url(processiong.svg);background-position:50%;color:transparent;pointer-events:none}.invalid{border:1px solid #ef0000;color:#ef0000}.invalid--text{display:none;color:#ef0000;padding:.25rem;margin:-1rem auto 1rem;font-weight:500;justify-content:center;line-height:1.2;font-size:.9rem}.invalid~.invalid--text:first-of-type{display:flex}.user-agreement{position:relative;border:none;margin:0;padding:0}.user-agreement__button{cursor:pointer;line-height:1.35;display:inline-block;font-size:.8rem;margin:0 0 2rem 1.5rem}.user-agreement input[type=checkbox]{position:absolute;top:0;left:0}.footer{display:flex;flex-flow:row wrap;justify-content:center;align-items:center;margin:2rem 0;color:grey}.footer__offered-by{margin:0 .5rem;font-size:.75rem}.footer_transattelecom-logo{width:10rem;vertical-align:middle;display:inline;padding:0;margin:0;height:3rem}.footer_transattelecom-logo img{-o-object-fit:contain;object-fit:contain}@media screen and (min-width:600px){body{grid-template-columns:1fr 1fr;align-items:center}.images__container{grid-row:1/3;place-self:stretch;margin:0}.images__container--logo{grid-row:1/2;place-self:center;margin-top:1rem}.footer{grid-column:1/3;margin:7rem 0 0}}</style>
</head>
<body>
   	<picture class="images__container" id="hero">
	   <img class="images-hero" srcx="images/hero-700w.jpg" alt="entreprise">
	</picture>
 	<span class="images__container images__container--logo">
	   <img  class="images__container__logo"
	   srcsetx="images/logo-80w.png, images/logo-80w.png 2x"
     srcx="images/logo-160w.png" alt="logo entreprise">
 	</span>

   	<form class="main-form" id="mainform" novalidate>
		<h1 class="main-form__title">WIFI GRATUIT!</h1>
		<input class="main-form__email" type="email" id="email" name="email" placeholder="Veuillez enter votre courriel pour vous connecter" alt="votre email svp">
   		<span class="invalid--text">Veuillez entrer une adresse courriel valide</span>
   		<fieldset class="user-agreement">
			<input type="checkbox" name="agree" id="agree-chckbx" alt="">
   			<label class="user-agreement__button" for="agree-chckbx">
				   En me connectant à ce WiFi, je consens à ce que mes renseignements personnels soit partagés conformément à <a href="/politique-de-confidentialité">la politique de confidentialité</a>.</label>
		<span class="invalid--text">Vous n’avez pas accepté nos modalités. Veuillez les accepter pour continuer</span>
   		</fieldset>
   		<input class="main-form__submit" type="submit" name="submit" value="ME CONNECTER">
   	</form>

<footer class="footer">
	<span class="footer__offered-by">Service offert par</span>
	<span class="images__container footer_transattelecom-logo">
	 <img 
	 srcsetx="images/transattelecom-logo-60h.png, images/transattelecom-logo-120h.png"
	 srcx="images/transattelecom-logo-60h.png" alt="transat telecom">
	</span>
</footer>
</body>

</html>