$time_menu = 1000;
$time_site = 2000;
$template_directory = "wp-content/themes/C-C";
$color_default = "#EF6C00"

var tab_color_menu = ["#EF6C00","#004478","#BA0500","#BAB500","#0E9800", "#930059"];/* Taille du tableau = nombre de lien dans le menu*/
var tab_color_sous_menu = ["#3084BF","#0095FF","#40B0FF","#73C5FF"];

var tab_nom_sous_menu = ["objectifs","pole-tourisme-adapte","pole-culture-de-liens","documents"]; 

$taille_menu = tab_color_menu.length;
$taille_sous_menu = tab_color_sous_menu.length;

/* Gestion des COOKIE*/
function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}
function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

/* Gestion de la couleur des bordures de la pages */
function border_page(nom_page) {
		if(nom_page == "forum"){
			$('.main').css('border','4px solid '+tab_color_menu[3]);
			$('.main h2 a').css('color',tab_color_menu[3]);
			$('#bbpress-forums input, #bbpress-forums button').css('border','1px ridge'+tab_color_menu[3])
			.css('background',tab_color_menu[3]);
		}
		else if (nom_page == "galerie"){
			$('.main').css('border','4px solid '+tab_color_menu[2]);
			$('.main h2').css('color',tab_color_menu[2]);
			$('.gallery-info').css('background',tab_color_menu[2]);
		}
		else if (nom_page == 'articles'){
			$('.post').css('border','4px solid '+tab_color_menu[4]);
			$('.post h2 a').css('color',tab_color_menu[4]);
			$('.info').css('background',tab_color_menu[4]);
		}
		else if(nom_page == 'accueil'){
			$('.main').css('border','4px solid '+tab_color_menu[0]);
			$('.main h2 a').css('color',tab_color_menu[0]);
			}
		else if(nom_page == 'contact'){
			$('.main').css('border','4px solid '+tab_color_menu[5]);
			$('.main a').css('color',tab_color_menu[5]);}
		else{
			$('.main').css('border','2px solid '+$color_default);
			for(var x=0;x<=$taille_sous_menu;x+=1){
				if(tab_nom_sous_menu[x] == nom_page){
					$('.main').css('border','4px solid '+tab_color_sous_menu[x]);
					$('.main h2').css('color',tab_color_sous_menu[x]);
					$('.type-sejour').css('border-color',tab_color_sous_menu[x]);
					$('.type-sejour h3').css('background',tab_color_sous_menu[x]);
					break;
				}
			}
		}
}

/* Gestion ouverture/Fermeture du sous-menu */
function ouverture_sous_menu(taille_ouverture_menu) {
		$('.sous-menu').animate({width:'400px'},$time_menu,function(){
			$('.sous-menu nav p').show();
		});
}
function fermeture_sous_menu() {
    	$('.sous-menu nav p').hide();
		$('.sous-menu').animate({width:"0%"},$time_menu,function(){
		});
}	

/* Gestion Ouverture/fermeture du site */
function fermeture_site() {
		$('#content').hide($time_site);
		$('footer .actions-site').attr('src',$template_directory + '/img/site_lock.png');
}
function ouverture_site() {
		$('#content').show($time_site);
		$('footer .actions-site').attr('src',$template_directory + '/img/site_unlock.png');
		calTailleBlocCentral();
		if (readCookie("EtatSite") == null)
			createCookie("EtatSite","ouvert",7);
}

/* Calcule la taille que doit avoir le bloc central de la page */
function calTailleBlocCentral(){
		var taillebloc = $('body').width()-$('.bloc-left').width()-$('.side').width()-25;
		if ($('.side').width() != null && taillebloc > 1321)
			taillebloc=1321;
		$('.bloc-center').css('width',taillebloc+'px');
}

/* L'initialisation du site */
function init(){
		/*  Chargement  */
		$(window).load(function(){
			$('#chargement').hide();
			$('.bloc-content').css('visibility','visible');
		});
	
		/* MAIL */
		$('.link-courriel').each(function() {
			var text = jQuery(this).attr('href');
			 var address = text.replace(" at ", "@");
			$(this).attr('href',address);
		});
		$('span.text-courriel').each(function() {
			 var text = jQuery(this).text();
			 var address = text.replace(" at ", "@");
			 $(this).text(address);
		});
		
   		/*ETAT sous-menu -> FERME*/		
		$('.sous-menu nav p').hide();
		
		/* Mise en place de la taille du bloc central */
		calTailleBlocCentral();
		$(window).resize(function(){
			calTailleBlocCentral();
		});
	
		/* BOUTON ET FOCUS*/
		$('.menu .actions-menu-secondaire').click(function(){
			if($('.sous-menu').css('width') != '0px'){
				fermeture_sous_menu();
			}
			else{
				ouverture_sous_menu(400);
			}
		});
		$('.sous-menu .fermeture-sous-menu').click(function(){
				fermeture_sous_menu();
		});
		$('footer .actions-site').click(function(){
			if($('#content').is(':visible')){
				fermeture_site();
			}
			else{
				ouverture_site();
			}
		});
		/* Traitement couleur du menu */
		for(var x=1;x<=$taille_menu;x+=1){
			$('.menu a:nth-of-type('+x+') b').css('background',tab_color_menu[x-1]);
			$('.menu a:nth-of-type('+x+') p').css('background',tab_color_menu[x-1]);	
		}
		for(var x=1;x<=$taille_sous_menu;x+=1){
			$('.sous-menu nav a:nth-of-type('+x+') b').css('background',tab_color_sous_menu[x-1]);
			$('.sous-menu nav a:nth-of-type('+x+') p').css('background',tab_color_sous_menu[x-1]);	
		}
}

jQuery(document).ready( function () {
	if (readCookie("EtatSite") == null){
		$('#content').hide();
		$('footer .actions-site').attr('src',$template_directory + '/img/site_lock.png');
	};
	init();
});