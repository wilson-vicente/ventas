<?php 

if ( ! function_exists(('sys_base'))) {
	# Devuelve la ruta de un archivo o carpeta en disco. Ej.: /home/usuer/documentos/archivo.pdf
	# El parémetro a recibir es igual al formato de base_url
	function sys_base($dir = '') {
		return dirname( getcwd() ) . "/{$dir}";
	}
}


if ( ! function_exists('link_script'))
{
	/**
	 * Link
	 *
	 * Generates link to a CSS file
	 *
	 * @param	mixed	stylesheet srcs or an array
	 * @param	string	type
	 * @param	string	title
	 * @param	string	media
	 * @param	bool	should index_page be added to the css path
	 * @return	string
	 */
	# function link_script($src = '', $type = 'text/javascript', $index_page = FALSE)
	function link_script($src, $print = FALSE)
	{
		if ( $print ) {
			$link = "<script type='text/javascript'>\n" . file_get_contents(sys_base($src)) . "\n</script>\n";
		} else {
			$CI =& get_instance();
			$link = '<script type="text/javascript" ';

			if (preg_match('#^([a-z]+:)?//#i', $src))
			{
				$link .= 'src="'.$src.'" ';
			}
			else
			{
				$link .= 'src="'.$CI->config->slash_item('base_url').$src.'" ';
			}

			$link .= "></script>\n";
		}

		return $link;
	}
}

if ( ! function_exists('verDato') ) {
	/* Verifica que un índice se encuentre dentro de un arreglo. */
	function verDato($arr, $dato, $return = NULL) {
		if (is_array($arr) && array_key_exists($dato, $arr) && !empty($arr[$dato]) ) {
			return $arr[$dato];
		}
		
		return $return;
	}
}

if ( ! function_exists('enviarJson'))
{
	/**
	 * Recibe un arreglo de datos y devuelve un archivo de cabecera json, 
	 * ideal para retornar en peticiones ajax
	 * @param  array $args arreglo de datos
	 * @return json
	 */
	function enviarJson($datos)
	{
		header('Content-type: application/json');
		echo json_encode($datos);
	}
}

?> 