
/*******************************
 ********* VARIABLES *********** 
 *******************************/
/* Menú Superior */
var _ESTADO_MENU_SUPERIOR = 0;

const contenedor_menu_superior = document.getElementById("menu__superior");
const btn_abrir_menu_superior = document.getElementById("abrir-menu-itmes");

/* Menú perfil */
var _ESTADO_MENU_PERFIL = 0;

const contenedor_menu_perfil = document.getElementById("menu__items__contenedor");

/*******************************
 ********** FUNCIONES ********** 
 *******************************/
function abrirMenuItems() {
	contenedor_menu_superior.classList.add("visible");
	_ESTADO_MENU_SUPERIOR = 1;
	if (_ESTADO_MENU_PERFIL == 1) {
		contenedor_menu_perfil.classList.remove("visible");
		contenedor_menu_perfil.style.display="none";
		_ESTADO_MENU_PERFIL = 2;
	}
	btn_abrir_menu_superior.classList.add("ocultar");
}

/**
 * Función media query menu superior.
 */
function cerrarMenuItems() {
	contenedor_menu_superior.classList.remove("visible");
	_ESTADO_MENU_SUPERIOR = 0;
	btn_abrir_menu_superior.classList.remove("ocultar");
}

/**
 * 
 */
function abiriMenuPerfil() {
	if (_ESTADO_MENU_SUPERIOR == 0) {
		if (_ESTADO_MENU_PERFIL == 0) {
			contenedor_menu_perfil.classList.add("visible");
			_ESTADO_MENU_PERFIL = 1;
		} else if(_ESTADO_MENU_PERFIL==1){
			contenedor_menu_perfil.classList.remove("visible");
			_ESTADO_MENU_PERFIL = 0;
		}else{
			contenedor_menu_perfil.style.display="block";
			contenedor_menu_perfil.classList.add("visible");
			_ESTADO_MENU_PERFIL = 1;
		}
	}

}


