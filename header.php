<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zolotyeruki
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'zolotyeruki' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="container container-style">
		<div class="row justify-content-around header-style">
				<div class="site-branding col-sm-2">
					<?php
					the_custom_logo();
					?>
				</div>
				<div class="rem-main col-sm-9">
					
						<div><h1>Ремонт стиральных/сушильных <br>и посудомоечных машин</h1></div>
						<div class="main-row">
							<!-- <div class="main-contact"> -->
							<div class="telephon col-sm-12">
								<i class="fas fa-phone"></i><a href="tel:+79315862086">8(931)586-20-86</a>
							</div>
							
								
							<div class="zakazform btn col-sm-12">
								<i class="far fa-clipboard"></i>Оставить заявку
							</div>
							
								
						</div>
					
				</div>
			
			
		</div>
		<div class="row justify-content-end">
			<nav id="site-navigation" class="main-navigation justify-content-end">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'zolotyeruki' ); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
			</nav><!-- #site-navigation -->
			</div>	
		<div id="myModal" class="myModal">

			<div class="wrapper">
			<div class="spanbtn">
			  <span class="closebtn">&times;</span>
			  </div>
			  <div class="form">
				
			    <form action="sendmail.php" id="form" class="form__body">
				  <h2 class="form__title">Форма заявки</h2>
				  <div class="form_item">
				    <label for="formName" class="form__label" >Имя*</label>
					<input type="text" id="formName" name="name" class="form_input" required>
				  </div>
				  <div class="form_item">
				    <label for="formTel" class="form__label">Телефон для связи*</label>
					<input type="tel" id="formTel" name="phone" class="form_input" pattern="[0-9]{1}-[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
					<small>Format: 8-XXX-XXX-XXXX </small>
				  </div>
				  <div class="form_item">
				    <label for="formEmail" class="form__label">E-mail</label>
					<input type="text" id="formEmail" name="Email" class="form_input">
				  </div>
				  <div class="form_item">
				    <label for="formText" class="form__label">Описание</label>
					<textarea id="formText" name="comment" class="form_inputarea" placeholder="По необходимости опишите ситуацию"></textarea>
				  </div>
				  <div class="form_item">
				    <div class="checkbox">
					<input id="formAgreement" type="checkbox" checked name="agreement" class="checkbox__input">
					<label for="formAgreement" class="checkbox__label"><span>Я даю согласие на обработку персональных данных в соответсвии с <a href="#">Условиями*</a></span></label>
					</div>
				  </div>
					<button type="submit" class="form__button">Отправить</button>		
				</form>
			  </div>
			</div>

		</div>	
	</div>
	</header><!-- #masthead -->
