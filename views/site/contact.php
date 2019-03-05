<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('web/img/cont_foto.jpeg')">
    <div class="container overlay">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                <div class="page-heading">
                    <h1 id="kingdom-font">Ждем вас каждый день!</h1>
                    <hr class="small">
                    <span id="slave" class="subheading">г.Смоленск, Ул. Крупской, 43, 1 эт. ТЦ "Европа".</span>
                    <h2><i class="fa fa-phone"></i> +1 415 431 3720</h2>
                    <span id="slave" class="subheading">г.Смоленск, ул.Рыенкова, 18, 2 эт. ТЦ "Рио".</span>
                    <h2><i class="fa fa-phone"></i> +1 415 431 3720</h2>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<!--
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <p>Want to get in touch with us? Fill out the form below to send us a message and we will try to get back to you within 24 hours!</p>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
<!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
<!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally!
<form name="sentMessage" id="contactForm" novalidate>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Email Address</label>
            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Phone Number</label>
            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Message</label>
            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <br>
    <div id="success"></div>
    <div class="row">
        <div class="form-group col-xs-12">
            <button type="submit" class="btn btn-default">Send</button>
        </div>
    </div>
</form>
</div>
</div>
</div>
-->
<div class="container">
    <div class="row-fluid">
        <div class="span8">
            <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2949.387327836708!2d32.062326748565965!3d54.76696982630571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46cef7e344454f6b%3A0x86604b2a7a8ad87a!2z0JXQstGA0L7Qv9Cw!5e0!3m2!1sru!2sru!4v1516012205392"></iframe>
        </div>
        <div class="span4">
            <h2>ТЦ "Европа"</h2>
            <!--
    		<address>
    			<strong>Hythe Window Cleaning</strong><br>
    			15 Springfield Way<br>
    			Hythe<br>
    			Kent<br>
    			United Kingdon<br>
    			CT21 5SH<br>
    			<abbr title="Phone">P:</abbr> 01234 567 890
    		</address>
    		-->
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row-fluid">
        <div class="span8">
            <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2452.253131147048!2d32.09543780594256!3d54.761998978980316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46cef7e344454f6b%3A0xedecf4ba3410fdc9!2z0KLQpiAi0KDQuNC-Ig!5e0!3m2!1sru!2sru!4v1516012439174"></iframe>
        </div>
        <div class="span4">
            <h2>ТЦ "Рио"</h2>
            <!--
            <address>
                <strong>Hythe Window Cleaning</strong><br>
                15 Springfield Way<br>
                Hythe<br>
                Kent<br>
                United Kingdon<br>
                CT21 5SH<br>
                <abbr title="Phone">P:</abbr> 01234 567 890
            </address>
            -->
        </div>
    </div>
</div>
