$time_menu = 1000;
$time_site = 2000;
$template_directory = "wp-content/themes/C-C";

var tab_color_menu = ["#375D81","#ff6600","#d11001","#019e59","#2d9500", "#d6191f"];/* Taille du tableau = nombre de lien dans le menu*/
var tab_color_sous_menu = ["#ff8822","#ffAA44","#ffCC66","#ffEE88"];

var tab_nom_sous_menu = ["objectif","pole-tourisme-adapte","pole-integration","documents"]; 

var tab_margin_menu_secondaire = ['85px','25px','0px','-25px'];
var tab_radius_menu_secondaire = ['0%','50%','50%','0%'];
var tab_margin_parentaires = ['50px','0px','0px','0px'];
var tab_radius_parentaires =['0','0','0','0'];

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
			$('.post').css('border','4px solid '+tab_color_menu[3]);
			$('#bbpress-forums input, #bbpress-forums button').css('border','1px ridge'+tab_color_menu[3])
			.css('background',tab_color_menu[3]);
		}
		else if (nom_page == "gallery"){
			$('.main').css('border','4px solid '+tab_color_menu[2]);
			$('.gallery-info').css('background',tab_color_menu[2]);
		}
		else if (nom_page == 'article'){
			$('.post').css('border','4px solid '+tab_color_menu[4]);
			$('.info').css('background',tab_color_menu[4]);
		}
		else if(nom_page == 'accueil')
			$('.main > div').css('border','4px solid '+tab_color_menu[0]);
		else{
			for(var x=0;x<=$taille_sous_menu;x+=1){
				if(tab_nom_sous_menu[x] == nom_page){
					$('.main > div').css('border','4px solid '+tab_color_sous_menu[x]);
					break;
				}
			}
		}
}

function ouverture_sous_page(taille_ouverture_menu, tab_margin, tab_radius) {
		$('.sous-page').css("margin",tab_to_css(tab_margin))
		.css('border-radius',tab_to_css(tab_radius));
		$('.menu-secondaire').show();
		$('.sous-page').show();
		$('.main').animate({width:(95-taille_ouverture_menu)+'%'},$time_menu);
		$('.sous-page').animate({width:taille_ouverture_menu+'%'},$time_menu,function(){
			$('.sous-page nav p').show();
		});
}

function fermeture_sous_page() {
    	$('.sous-page nav p').hide();
		$('.main').animate({width:"95%"},$time_menu);
		$('.sous-page').animate({width:"0%"},$time_menu,function(){
			$('.sous-page').hide();
			$('.menu-secondaire').hide();
		});
}
	
function fermeture_site() {
		$('#content').hide($time_site);
		$('footer .actions-site').attr('src',$template_directory + '/img/lock.png');
}
	
function ouverture_site() {
		$('#content').show($time_site);
		$('footer .actions-site').attr('src',$template_directory + '/img/unlock.png');
}

function init(){
   		/*INIT MENU FERME*/
		$('.sous-page').hide();
		$('.main-titre').hide();
		$('.sous-page nav p').hide();		
		
		/* Mise en place de la taille du bloc central */
		$('.bloc-center').css('width',cal_taille_bloc_center()+'px');
		$(window).resize(function(){
			$('.bloc-center').css('width',cal_taille_bloc_center()+'px');
		});
	
		/* BOUTON ET FOCUS*/
		$('.menu .actions-menu-secondaire').click(function(){
			if($('.sous-page').is(':visible')){
				fermeture_sous_page();
			}
			else{
				ouverture_sous_page(40,tab_margin_menu_secondaire,tab_radius_menu_secondaire);
			}
		});
		$('.sous-page .fermeture-sous-page').click(function(){
				fermeture_sous_page();
		});
		$('footer .actions-site').click(function(){
			if($('#content').is(':visible')){
				fermeture_site();
			}
			else{
				ouverture_site();
			}
		});
		$('.menu a').mouseenter(function(){
			$(this).animate({"text-align":"right"},500);
		})
		.mouseleave(function(){
				$(this).animate({"left":"auto"},500);
		});
		/* Traitement couleur du menu */
		for(var x=1;x<=$taille_menu;x+=1){
			$('.menu a:nth-of-type('+x+') b').css('background',tab_color_menu[x-1]);
			$('.menu a:nth-of-type('+x+') p').css('background',tab_color_menu[x-1]);	
		}
		for(var x=1;x<=$taille_sous_menu;x+=1){
			$('.sous-page nav a:nth-of-type('+x+') b').css('background',tab_color_sous_menu[x-1]);
			$('.sous-page nav a:nth-of-type('+x+') p').css('background',tab_color_sous_menu[x-1]);	
		}
}

jQuery(document).ready( function () {
    //DOM est défini
	
	/******************/
	/*	INIT ACTIONS  */
	/******************/
	init();
});