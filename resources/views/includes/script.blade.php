<!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>

    {{-- Script universel pour la recherche instantanée et la pagination compacte --}}
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.custom-table-wrapper').forEach(function (wrapper) {
            const searchInput = wrapper.querySelector('.custom-table-search');
            const table = wrapper.querySelector('.custom-table');
            const infoBox = wrapper.querySelector('.custom-table-info');
            const paginationBox = wrapper.querySelector('.custom-table-pagination');

            if (!table) return;

            const tbody = table.querySelector('tbody');
            const allRows = Array.from(tbody.querySelectorAll('tr'));
            const itemLabel = wrapper.dataset.label || 'éléments';
            const rowsPerPage = parseInt(wrapper.dataset.perPage) || 10;

            let currentPage = 1;
            let filteredRows = [...allRows];

            function createPageItem(label, page, disabled = false, active = false) {
                const li = document.createElement('li');
                li.className = `page-item ${disabled ? 'disabled' : ''} ${active ? 'active' : ''}`;
                li.innerHTML = `<a class="page-link" href="#">${label}</a>`;
                if (!disabled && page !== null) {
                    li.onclick = (e) => {
                        e.preventDefault();
                        currentPage = page;
                        renderTable();
                    };
                }
                return li;
            }

            function renderTable() {
                const total = filteredRows.length;
                const totalPages = Math.ceil(total / rowsPerPage) || 1;
                if (currentPage > totalPages) currentPage = totalPages;

                const start = (currentPage - 1) * rowsPerPage;
                const end = start + rowsPerPage;

                allRows.forEach(row => row.style.display = 'none');
                filteredRows.slice(start, end).forEach(row => row.style.display = '');

                if (infoBox) {
                    infoBox.textContent = total === 0
                        ? `Aucun résultat trouvé.`
                        : `Affichage de ${start + 1} à ${Math.min(end, total)} sur ${total} ${itemLabel}`;
                }

                if (!paginationBox) return;
                paginationBox.innerHTML = '';
                if (totalPages <= 1) return;

                paginationBox.appendChild(createPageItem('Précédent', currentPage - 1, currentPage === 1));

                const delta = 2;
                const range = [];
                for (let i = Math.max(2, currentPage - delta); i <= Math.min(totalPages - 1, currentPage + delta); i++) {
                    range.push(i);
                }

                paginationBox.appendChild(createPageItem(1, 1, false, currentPage === 1));
                if (range[0] > 2) paginationBox.appendChild(createPageItem('...', null, true));

                range.forEach(page => {
                    paginationBox.appendChild(createPageItem(page, page, false, currentPage === page));
                });

                if (range[range.length - 1] < totalPages - 1) paginationBox.appendChild(createPageItem('...', null, true));
                if (totalPages > 1) paginationBox.appendChild(createPageItem(totalPages, totalPages, false, currentPage === totalPages));

                paginationBox.appendChild(createPageItem('Suivant', currentPage + 1, currentPage === totalPages));
            }

            if (searchInput) {
                searchInput.addEventListener('input', function () {
                    const term = this.value.toLowerCase().trim();
                    filteredRows = allRows.filter(row => row.textContent.toLowerCase().includes(term));
                    currentPage = 1;
                    renderTable();
                });
            }

            renderTable();
        });
    });
    </script>
    @stack('scripts')
