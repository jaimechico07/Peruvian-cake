// Se utiliza para el formulario.

// const form = document.getElementById("form-home");

// form.addEventListener("submit", (e) => {
//   e.preventDefault();

//   const data = new FormData(form);

//   const regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
//   const regexTelefono = /^\d{7,14}$/;

//   const errors = [];
//   const nombre = data.get("nombre");
//   const telefono = data.get("telefono");
//   const correo = data.get("correo");
//   const mensaje = data.get("mensaje");

//   regexTelefono.test(telefono) ? null : errors.push("Teléfono no valido");
//   regexEmail.test(correo) ? null : errors.push("Correo no valido");
//   nombre.length <= 2 ? errors.push("El nombre debe ser mayor a 2 letras") : null;
//   mensaje.length <= 2 ? errors.push("El mensaje debe ser mayor a 2 letras") : null;

//   if(errors.length > 0) {
//     Swal.fire({
//       icon: 'error',
//       title: 'Datos ingresados no válidos',
//       text: errors,
//       confirmButtonText:'Cerrar',

//     });
//   }else {
//     Swal.fire({
//       title: '¿Desea enviar el siguiente mensaje?',
//       text: mensaje,
//       showDenyButton: true,
//       showCancelButton: false,
//       confirmButtonText: 'Sí',
//       denyButtonText: 'No',
//       footer: 'Nota: Se enviara vía whatsapp'
//     }).then(result => {
//       if(result.isConfirmed) {
//         Swal.fire("¡Gracias, su mensaje fue enviado correctamente!", '', 'success')
//         const title = "*Mensaje enviado desde la web Traperos de Emaús La Union\n*";
//         const body = `Mis datos son : \n${nombre} \n${telefono} \n${correo}`;
//         const message = `Mi consulta es ${mensaje}`;
//         const url = `https://api.whatsapp.com/send?phone=+51982920976&text=${title}${body}${message}`;
//         window.open(url, "_blank");
//         form.reset();
//       }else {
//         Swal.fire({
//           icon: 'info',
//           title: 'Mensaje no enviado',
//           text: 'El mensaje no fue enviado',
//           confirmButtonText:'Cerrar',
//         });
//         form.reset()
//       }
//     })
//   }
// })
