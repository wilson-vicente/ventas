function base_url(url) {
  return window.location.origin + "/sis_v/ventas/" + url;
}

$(document).on("submit", "#formGuardar", function(e) {
  e.preventDefault();
  var xhr = new XMLHttpRequest();
  var datos = new FormData();
  
  var usuario = document.getElementById("usuario").value; 
  var correo  = document.getElementById("correo").value;

  datos.append("usuario", usuario);
  datos.append("correo", correo);

  xhr.open("POST", this.action, true);
  xhr.onload = function() {
  	var res = this.response;
   	alert(res.mensaje);
	  document.getElementById("formGuardar").reset();
    cargarlista();
  } 
  xhr.responseType = "json";
  xhr.send(datos);
})

function cargarlista() {
  var url = base_url("index.php/hotel/hotel/listas");
  var xhr = new XMLHttpRequest();
  var datos = new FormData();
  xhr.open("POST", url, true);
  xhr.onload = function() {
    document.getElementById("listaUsuario").innerHTML = this.responseText
  }
  xhr.send(datos);
} 

$(document).on("submit", "#generaGramatica", function(e){
  e.preventDefault();
  var xhr = new XMLHttpRequest();
  var datos = new FormData();

  var oracion = document.getElementById("oracion").value;

  var lenguaje = getRadioButtonSelectedValue(document.generaGramatica.lenguaje);

  datos.append("oracion", oracion);
  datos.append("lenguaje", lenguaje); 

  xhr.open("POST", this.action, true)
  xhr.onload = function() {
    var res = this.response;

    // Articulo 
    articulo.innerHTML  = res.mensaje_articulo;
    if (res.exist_articulo == 1) {
       document.getElementById("articulo").className = "alert alert-info alert-dismissable4";   
    } else {
      document.getElementById("articulo").className = "alert alert-danger alert-dismissable4"; 
    }

    // Sujeto
    sujeto.innerHTML    = res.mensaje_sujeto;
    if (res.exist_sujeto == 1) {
      document.getElementById("sujeto").className = "alert alert-info alert-dismissable4"; 
    } else {
      document.getElementById("sujeto").className = "alert alert-danger alert-dismissable4";
    }

    // Verbo
    verbo.innerHTML     = res.mensaje_verbo;
    if (res.exist_verbo == 1) {
      document.getElementById("verbo").className = "alert alert-info alert-dismissable4";
    } else {
      document.getElementById("verbo").className = "alert alert-danger alert-dismissable4"; 
    }

    // Predicado
    predicado.innerHTML = res.mensaje_predicado;
    if (res.exist_predicado) {
      document.getElementById("predicado").className = "alert alert-info alert-dismissable4"; 
    } else {
      document.getElementById("predicado").className = "alert alert-danger alert-dismissable4";
    }

    // Gramatica 
    gramatica.innerHTML = res.mensaje_gramatica;
    if (res.gramatica_valida == 1) {
      document.getElementById("gramatica").className = "alert alert-success alert-dismissable4";
    } else {
      document.getElementById("gramatica").className = "alert alert-danger alert-dismissable4";
    }

    // Reglas 
    regla_articulo.innerHTML  = res.regla_articulo;
    regla_sujeto.innerHTML    = res.regla_sujeto;
    regla_verbo.innerHTML     = res.regla_verbo;
    regla_predicado.innerHTML = res.regla_predicado;
            


    //document.getElementById("generaGramatica").reset();
  }
  xhr.responseType = "json";
  xhr.send(datos);
})

function getRadioButtonSelectedValue(ctrl) {
  for(i=0; i<ctrl.length; i++) {
    if(ctrl[i].checked) {
      return ctrl[i].value;
    }
  }
}


/*$(document).on("submit", "#formMetodo", function(e){
  e.preventDefault();
  var xhr   = new XMLHttpRequest();
  var datos = new FormData();

  // S1
  var s11 = document.getElementById("s11").value;
  datos.append("s11", s11);
  var s12 = document.getElementById("s12").value;
  datos.append("s12", s12);
  var s13 = document.getElementById("s13").value;
  datos.append("s13", s13);
  var s14 = document.getElementById("s14").value;
  datos.append("s14", s14);
  var s15 = document.getElementById("s15").value;
  datos.append("s15", s15);
  var s16 = document.getElementById("s16").value;
  datos.append("s16", s16);
  var s17 = document.getElementById("s17").value;
  datos.append("s17", s17);

  // S2
  var s21 = document.getElementById("s21").value;
  datos.append("s21", s21);
  var s22 = document.getElementById("s22").value;
  datos.append("s22", s22);
  var s23 = document.getElementById("s23").value;
  datos.append("s23", s23);
  var s24 = document.getElementById("s24").value;
  datos.append("s24", s24);
  var s25 = document.getElementById("s25").value;
  datos.append("s25", s25);
  var s26 = document.getElementById("s26").value;
  datos.append("s26", s26);
  var s27 = document.getElementById("s27").value;
  datos.append("s27", s27);

  // S3
  var s31 = document.getElementById("s31").value;
  datos.append("s31", s31);
  var s32 = document.getElementById("s32").value;
  datos.append("s32", s32);
  var s33 = document.getElementById("s33").value;
  datos.append("s33", s33);
  var s34 = document.getElementById("s34").value;
  datos.append("s34", s34);
  var s35 = document.getElementById("s35").value;
  datos.append("s35", s35);
  var s36 = document.getElementById("s36").value;
  datos.append("s36", s36);
  var s37 = document.getElementById("s37").value;
  datos.append("s37", s37);

  // S4
  var s41 = document.getElementById("s41").value;
  datos.append("s41", s41);
  var s42 = document.getElementById("s42").value;
  datos.append("s42", s42);
  var s43 = document.getElementById("s43").value;
  datos.append("s43", s43);
  var s44 = document.getElementById("s44").value;
  datos.append("s44", s44);
  var s45 = document.getElementById("s45").value;
  datos.append("s45", s45);
  var s46 = document.getElementById("s46").value;
  datos.append("s46", s46);
  var s47 = document.getElementById("s47").value;
  datos.append("s47", s47);

  // S5
  var s51 = document.getElementById("s51").value;
  datos.append("s51", s51);
  var s52 = document.getElementById("s52").value;
  datos.append("s52", s52);
  var s53 = document.getElementById("s53").value;
  datos.append("s53", s53);
  var s54 = document.getElementById("s54").value;
  datos.append("s54", s54);
  var s55 = document.getElementById("s55").value;
  datos.append("s55", s55);
  var s56 = document.getElementById("s56").value;
  datos.append("s56", s56);
  var s57 = document.getElementById("s57").value;
  datos.append("s57", s57);

  // S6
  var s61 = document.getElementById("s61").value;
  datos.append("s61", s61);
  var s62 = document.getElementById("s62").value;
  datos.append("s62", s62);
  var s63 = document.getElementById("s63").value;
  datos.append("s63", s63);
  var s64 = document.getElementById("s64").value;
  datos.append("s64", s64);
  var s65 = document.getElementById("s65").value;
  datos.append("s65", s65);
  var s66 = document.getElementById("s66").value;
  datos.append("s66", s66);
  var s67 = document.getElementById("s67").value;
  datos.append("s67", s67);

  // S7
  var s71 = document.getElementById("s71").value;
  datos.append("s71", s71);
  var s72 = document.getElementById("s72").value;
  datos.append("s72", s72);
  var s73 = document.getElementById("s73").value;
  datos.append("s73", s73);
  var s74 = document.getElementById("s74").value;
  datos.append("s74", s74);
  var s75 = document.getElementById("s75").value;
  datos.append("s75", s75);
  var s76 = document.getElementById("s76").value;
  datos.append("s76", s76);
  var s77 = document.getElementById("s77").value;
  datos.append("s77", s77);

  // S8
  var s81 = document.getElementById("s81").value;
  datos.append("s81", s81);
  var s82 = document.getElementById("s82").value;
  datos.append("s82", s82);
  var s83 = document.getElementById("s83").value;
  datos.append("s83", s83);
  var s84 = document.getElementById("s84").value;
  datos.append("s84", s84);
  var s85 = document.getElementById("s85").value;
  datos.append("s85", s85);
  var s86 = document.getElementById("s86").value;
  datos.append("s86", s86);
  var s87 = document.getElementById("s87").value;
  datos.append("s87", s87);

  xhr.open("POST", this.action, true);
  xhr.onload = function() {
    var res = this.response;
    alert(res.mensaje);
   //document.getElementById("formMetodo").reset();
  }
  xhr.responseType = "json";
  xhr.send(datos);
})*/


