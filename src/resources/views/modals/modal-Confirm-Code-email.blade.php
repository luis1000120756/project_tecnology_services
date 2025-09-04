<!-- Modal 1: Usuario Registrado -->
<div class="modal fade show" id="modalRegister" tabindex="-1" aria-hidden="true" style="display: block;">
    <div class="modal-dialog">
        <div class="modal-content"
            style="background: linear-gradient(135deg, #2c2a4a, #0098d8, #8a2463); border-radius: 20px; color: #fff;">

            <!-- Encabezado -->
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold text-white">✅ Confirmación</h5>
                <button id="btnCloseModalX" type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Cerrar"></button>
            </div>

            <!-- Cuerpo -->
            <div class="modal-body text-center">
                <p class="fs-5">Usuario registrado exitosamente Puedes inciar sesión</p>
            </div>

            <!-- Footer -->
            <div class="modal-footer border-0 justify-content-center">
                <button id="btnModalClose" type="button" class="btn btn-light px-4 rounded-pill"
                    data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Overlay oscuro del modal -->
<div class="modal-backdrop fade show"></div>
<script>
    const btnCloseModal = document.getElementById('btnModalClose');
    const btnCloseModalX = document.getElementById('btnCloseModalX');
    const modal = document.getElementById('modalRegister');
    const backdrop = document.querySelector('.modal-backdrop');
    if (btnCloseModal && btnCloseModalX) {
        btnCloseModal.addEventListener('click', () => {
            modal.style.display = 'none';
            backdrop.style.display = 'none';
        })
        btnCloseModalX.addEventListener('click', () => {
            modal.style.display = 'none';
            backdrop.style.display = 'none';
        })
    }
</script>
