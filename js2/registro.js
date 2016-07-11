/**
 * Registro
 */

function main() {
	document.getElementById("btnRegistrar").onclick=abrirFormulario;

}

function abrirFormulario() {
	document.getElementById("formularioRegistro").style.display="block";
}

window.onload=main;