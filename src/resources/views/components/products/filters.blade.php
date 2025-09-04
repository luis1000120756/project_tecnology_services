 <div class="card shadow-sm border-0 mb-4" style="background-color: #1e1e2d; border-radius: 1rem; color: #f8f9fa;">
     <div class="card-body">
         <h5 class="card-title mb-4 text-primary fw-semibold d-flex align-items-center">
             <i class="fas fa-filter me-2"></i>Filtros
         </h5>
         <form>
             <div class="row g-4">
                 {{-- Categoría --}}
                 <div class="col-md-3">
                     <label class="form-label fw-semibold text-light">Categoría</label>
                     <select class="form-select bg-dark text-light border-primary shadow-sm rounded-3">
                         <option selected>Todas las categorías</option>
                         <option value="Consolas">Consolas</option>
                         <option value="Audífonos">Audífonos</option>
                         <option value="Controles">Controles</option>
                         <option value="Accesorios">Accesorios</option>
                     </select>
                 </div>

                 {{-- Precio mínimo --}}
                 <div class="col-md-3">
                     <label class="form-label fw-semibold text-light">Precio mínimo</label>
                     <input type="number" class="form-control bg-dark text-light border-primary shadow-sm rounded-3"
                         placeholder="Ej: 100">
                 </div>

                 {{-- Precio máximo --}}
                 <div class="col-md-3">
                     <label class="form-label fw-semibold text-light">Precio máximo</label>
                     <input type="number" class="form-control bg-dark text-light border-primary shadow-sm rounded-3"
                         placeholder="Ej: 500">
                 </div>

                 {{-- Búsqueda --}}
                 <div class="col-md-3">
                     <label class="form-label fw-semibold text-light">Buscar</label>
                     <input type="text" class="form-control bg-dark text-light border-primary shadow-sm rounded-3"
                         placeholder="Buscar producto...">
                 </div>
             </div>

             {{-- Botones --}}
             <div class="d-flex justify-content-end gap-3 mt-4">
                 <button type="button" class="btn btn-primary px-4 shadow-sm rounded-pill">
                     <i class="fas fa-search me-1"></i> Filtrar
                 </button>
                 <button type="reset" class="btn btn-outline-light px-4 shadow-sm rounded-pill">
                     <i class="fas fa-times me-1"></i> Limpiar
                 </button>
             </div>
         </form>
     </div>
 </div>
