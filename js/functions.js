$time_menu = 1000;
$time_site = 2000;
$template_directory = "wp-content/themes/C-C";

var tab_color_menu = ["#375D81","#ff6600","#d11001","#019e59","#2d9500", "#d6191f"];/* Taille du tableau = nombre de lien dans le menu*/
var tab_color_sous_menu = ["#ff8822","#ffAA44","#ffCC66","#ffEE88"];

var tab_pos_menu = [20,10,5,10,20,30];/* EN %*/
var tab_pos_sous_menu =[20,20,10]; /* EN %*/

$taille_menu = tab_color_menu.length;
$taille_sous_menu = tab_color_sous_menu.length;

var elem_menu = 1;

jQuery(document).ready(function () {
    //DOM est défini

    /*INIT MENU FERME*/
	$('.sous-page').hide();
	$('.main-titre').hide();
	/* INIT MENU OUVERT
    $('.main').css('width', '2%');
    $('.sous-page').css('width', '48%');

    $('.sous_page').show();
	$('article').hide();
	$('.article-name').hide();
	$('.main-titre').show();*/
	
    function ouverture_sous_page(taille_ouverture_menu) {
		$('.sous-page').show();
		$('.main').animate({width:(96-taille_ouverture_menu)+'%'},$time_menu);
		$('.sous-page').animate({width:taille_ouverture_menu+'%'},$time_menu,function(){
			$('.sous-page nav p').show();
		});
    };

    function fermeture_sous_page() {
    	$('.sous-page nav p').hide();
		$('.main').animate({width:"96%"},$time_menu);
		$('.sous-page').animate({width:"0%"},$time_menu,function(){
			$('.sous-page').hide();
		});
    }
	
	function fermeture_site() {
		$('#content').hide($time_site);
		$('footer .actions-site').attr('src',$template_directory + '/img/lock.png')
	};
	
	function ouverture_site() {
		$('#content').show($time_site);
		$('footer .actions-site').attr('src',$template_directory + '/img/unlock.png')
	};
	
	function init(){
		/* BOUTON ET FOCUS*/
		$('.menu .actions-sous-page').click(function(){
			if($('.sous-page').is(':visible')){
				fermeture_sous_page();
			}
			else{
				ouverture_sous_page(40);
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
		
		/* Traitement menu */
		for(var x=1;x<=$taille_menu;x+=1){
			$('.menu a:nth-of-type('+x+') b').css('background',tab_color_menu[x-1]);
			$('.menu a:nth-of-type('+x+') p').css('background',tab_color_menu[x-1]);	
		}
		
		for(var x=1;x<=$taille_sous_menu;x+=1){
			$('.sous-page nav a:nth-of-type('+x+') b').css('background',tab_color_sous_menu[x-1]);
			$('.sous-page nav a:nth-of-type('+x+') p').css('background',tab_color_sous_menu[x-1]);	
		}
	}
	
	/**************/
	/*  TEST	  */
	/**************/
	//ouverture_sous_page();
	
	/******************/
	/*	INIT ACTIONS  */
	/******************/
	init();
});