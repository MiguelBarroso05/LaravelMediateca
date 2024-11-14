<p class="m-0 text-secondary">
    A mostrar <span>{{ $authors->firstItem() }}</span> a <span>{{ $authors->lastItem() }}</span> de <span>{{ $authors->total() }}</span> registos
</p>
<ul class="pagination m-0 ms-auto">
    <!-- Link para página anterior -->
    <li class="page-item {{ $authors->onFirstPage() ? 'disabled' : '' }}">
        <a class="page-link" href="{{ $authors->previousPageUrl() }}" tabindex="-1" aria-disabled="{{ $authors->onFirstPage() }}">
            <!-- Ícone para página anterior -->
            <i class="ti ti-chevron-left"></i>
            prev
        </a>
    </li>

    <!-- Links para as páginas -->
    @for ($page = 1; $page <= $authors->lastPage(); $page++)
        <li class="page-item {{ $page == $authors->currentPage() ? 'active' : '' }}">
            <a class="page-link" href="{{ $authors->url($page) }}">{{ $page }}</a>
        </li>
    @endfor

    <!-- Link para próxima página -->
    <li class="page-item {{ $authors->hasMorePages() ? '' : 'disabled' }}">
        <a class="page-link" href="{{ $authors->nextPageUrl() }}">
            next
            <!-- Ícone para próxima página -->
            <i class="ti ti-chevron-right"></i>
        </a>
    </li>
</ul>
