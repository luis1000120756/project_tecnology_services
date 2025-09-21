 <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content contact-form">
             <div class="modal-header border-0">
                 <h5 class="modal-title section-title" id="registerModalLabel">Registro</h5>
                 <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                     aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form id="formRegister" method="POST" action="{{ route('user.register') }}">
                     @csrf
                     <div class="mb-3">
                         <label for="reg-nombre" class="form-label">Nombre completo</label>
                         <input type="text" class="form-control" id="reg-nombre" name="nameUser" required>
                     </div>
                     <div class="mb-3">
                         <label for="reg-email" class="form-label">Correo electrónico</label>
                         <input type="email" class="form-control" id="reg-email" name="email" required>
                     </div>
                     <div class="mb-3">
                         <label for="reg-password" class="form-label">Contraseña</label>
                         <input type="password" class="form-control" id="reg-password" name="password" required>
                     </div>
                     <div class="d-grid gap-2 position-relative">
                         <button type="submit" class="btn btn-primary" id="btnRegister">Registrarse</button>
                         <div class="spinner-overlay" id="spinnerRegisterForm" style="display:none; ">
                             <div class="spinner-border text-light" role="status">
                                 <span class="visually-hidden">Cargando...</span>
                             </div>
                         </div>
                     </div>

                 </form>
             </div>
         </div>
     </div>
 </div>
 <style>
     .spinner-overlay {
         display: none;
         /* oculto por defecto */
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: rgba(0, 0, 0, 0.5);
         display: flex;
         /* flex para centrar */
         justify-content: center;
         align-items: center;
     }
 </style>
 <script>
     const spinnerRegisterForm = document.getElementById('spinnerRegisterForm');
     const btnRegister = document.getElementById('btnRegister');

     if (spinnerRegisterForm && btnRegister) {
         btnRegister.addEventListener('click', () => {
             spinnerRegisterForm.style.display = 'flex'; // no block
         });
     }
 </script>
