$time_menu = 1000;
$time_site = 2000;
$template_directory = "wp-content/themes/C-C";
$color_default = "#33A133"

var tab_color_menu = ["#375D81","#ff6600","#d11001","#019e59","#2d9500", "#d6191f"];/* Taille du tableau = nombre de lien dans le menu*/
var tab_color_sous_menu = ["#ff8822","#ffAA44","#ffCC66","#ffEE88"];

var tab_nom_sous_menu = ["objectifs","pole-tourisme-adapte","pole-integration","documents"]; 

$taille_menu = tab_color_menu.length;
$taille_sous_menu = tab_color_sous_menu.length;

/*  FUNCTION EXTERN  */
function cal_taille_bloc_center(){
	return $('body').width()-$('.bloc-left').width()-$('.side').width()-20;
}

function tab_to_css(tab_of_css){
	return tab_of_css[0]+' '+tab_of_css[1]+' '+tab_of_css[2]+' '+tab_of_css[3];
}

/* accueil / galerie / forum / article / 3 pole / documents */
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
					$('.main a').css('color',tab_color_sous_menu[x]);
					break;
				}
			}
		}
}

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
	
function fermeture_site() {
		$('#content').hide($time_site);
		$('footer .actions-site').attr('src',$template_directory + '/img/site_lock.png');
}
	
function ouverture_site() {
		$('#content').show($time_site);
		$('footer .actions-site').attr('src',$template_directory + '/img/site_unlock.png');
}

function init(){
		/*  Chargement  */
		$('.bloc-content').hide();
		$(window).load(function(){
			$('#chargement').hide();
			$('.bloc-content').show();
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
		$('.bloc-center').css('width',cal_taille_bloc_center()+'px');
		$(window).resize(function(){
			$('.bloc-center').css('width',cal_taille_bloc_center()+'px');
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
		$('.sous-page .fermeture-sous-page').click(function(){
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
    //DOM est défini
	
	/******************/
	/*	INIT ACTIONS  */
	/******************/
	init();
});