CREATE TABLE usuarios(usuario varchar(20) primary key,
                      password varchar(100) not null,
					  nombreUsuario varchar(100) not null,
					  rol varchar(50) not null);
CREATE TABLE proyectos(idProyecto,
                       nombreProyecto,
					   fechaProyecto,
					   cliente,
					   pais,
					   usuario,
						validarEstructuraNombreEntrada,
						validarEstructuraNombreSalida,
						entradaProcesadoPorCORE,
						salidaProcesadoPorCORE,
						incluirDocumentosProcesadosCorrectamente,
						SeparadorEntrada,			
						SeparadorSalida,			
						multiplesDocumentosEntrada,			
						multiplesDocumentosSalida,			
						comportamientoCaracteresEspeciales,		
						validarCamposDocumento,
						comportamientoReferenciasCruzadas,
						comportamientoLongitud,
						mapaInvolucraBD,
						FormatoNumerosNegativos,			
						SeparadorDecimales,			
						SeparadorMiles,			
						ManejoConsecutivo,
						validarsCodificacionEntrada,
						validarsCodificacionSalida,
						estandarUtilizado,
						cumpleRequerimientosHardware,
						contacto,
						TipoSolucion,			
						plataformaSO
);

CREATE TABLE historial_proyecto(
					   idHistorialProyecto,
					   idProyecto,
                       nombreProyecto,
					   usuario,
					   validarEstructuraNombreEntrada,
					   validarEstructuraNombreSalida,
						entradaProcesadoPorCORE,
						salidaProcesadoPorCORE,
						incluirDocumentosProcesadosCorrectamente,
						SeparadorEntrada,			
						SeparadorSalida,			
						multiplesDocumentosEntrada,			
						multiplesDocumentosSalida,			
						comportamientoCaracteresEspeciales,		
						validarCamposDocumento,
						comportamientoReferenciasCruzadas,
						comportamientoLongitud,
						mapaInvolucraBD,
						FormatoNumerosNegativos,			
						SeparadorDecimales,			
						SeparadorMiles,			
						ManejoConsecutivo,
						validarsCodificacionEntrada,
						validarsCodificacionSalida,
						estandarUtilizado,
						cumpleRequerimientosHardware,
						contacto,
						TipoSolucion,			
						plataformaSO
);
						
CREATE TABLE requerimientos(
					        idRequerimiento,
							idproyecto,
							seccion,
							NombreEntrada,
							ObligatorioEntrada,
							TipoEntrada,
							LongitudEntrada,
							ValidacionesEntrada,
							ObservacionesEntrada,
							NombreSalida,
							ObligatorioSalida,
							TipoSalida,
							LongitudSalida,
							ValidacionesSalida,
							ObservacionesSalida
);
CREATE TABLE historial_requerimientos(
							idHistorialREquerimiento,
							idHistorialProyecto,
							idRequerimiento,
							idproyecto,
							seccion,
							NombreEntrada,
							ObligatorioEntrada,
							TipoEntrada,
							LongitudEntrada,
							ValidacionesEntrada,
							ObservacionesEntrada,
							NombreSalida,
							ObligatorioSalida,
							TipoSalida,
							LongitudSalida,
							ValidacionesSalida,
							ObservacionesSalida
);