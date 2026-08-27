

<div class="biblioteca-page">

    {{-- Textura --}}
    <div class="grain-overlay"></div>

    {{-- Partículas --}}
    <div class="sparkles" aria-hidden="true">
        <span style="top: 8%; left: 12%; animation-delay: .3s;"></span>
        <span style="top: 18%; left: 78%; animation-delay: 1.2s;"></span>
        <span style="top: 31%; left: 42%; animation-delay: .8s;"></span>
        <span style="top: 44%; left: 91%; animation-delay: 2s;"></span>
        <span style="top: 55%; left: 7%; animation-delay: 1.6s;"></span>
        <span style="top: 67%; left: 25%; animation-delay: .5s;"></span>
        <span style="top: 73%; left: 68%; animation-delay: 2.3s;"></span>
        <span style="top: 82%; left: 48%; animation-delay: 1.1s;"></span>
        <span style="top: 91%; left: 87%; animation-delay: .7s;"></span>
        <span style="top: 37%; left: 18%; animation-delay: 1.9s;"></span>
        <span style="top: 61%; left: 82%; animation-delay: 2.5s;"></span>
        <span style="top: 12%; left: 55%; animation-delay: 1.4s;"></span>
        <span style="top: 49%; left: 59%; animation-delay: .9s;"></span>
        <span style="top: 88%; left: 16%; animation-delay: 2.1s;"></span>
        <span style="top: 26%; left: 4%; animation-delay: 1.7s;"></span>
    </div>


    <main class="biblioteca-container">

        {{-- Cabeçalho --}}
        <section class="biblioteca-heading">

            <h1>
                Biblioteca Beth Cientista
            </h1>

            <p>
                Acervo de livros científicos para clubistas!
            </p>


            {{-- Pesquisa --}}
            <div class="search-wrapper">

                <div class="search-glow"></div>

                <div class="search-box">

                    <svg
                        class="search-icon"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>

                    <input
                        type="text"
                        id="bookSearch"
                        placeholder="Buscar livros por título, autor ou categoria..."
                        autocomplete="off"
                    >

                </div>

            </div>

        </section>


        {{-- Banner de doação --}}
        <section class="donation-banner">

            <div class="donation-glow"></div>

            <div class="donation-content">

                <div class="donation-info">

                    <div class="heart-icon">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                        >
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/>
                        </svg>

                    </div>

                    <div>
                        <h2>Doe um Livro!</h2>

                        <p>
                            Ajude a expandir nossa biblioteca científica!
                        </p>
                    </div>

                </div>


                <a
                    href="{{ route('doacoes') }}"
                    class="donation-button"
                >
                    Quero Doar
                </a>

            </div>

        </section>


        {{-- Livros --}}
        <section class="books-grid" id="booksGrid">

            {{-- Livro 1 --}}
            <article
                class="book-card"
                data-search="uma breve história do tempo stephen hawking física"
            >

                <div class="book-glow"></div>

                <div class="book-cover">

                    <div class="book-icon">
                        📖
                    </div>

                </div>

                <div class="book-content">

                    <div class="book-tags">

                        <span class="category-tag">
                            Física
                        </span>

                        <span class="availability available">
                            Disponível
                        </span>

                    </div>

                    <h2>
                        Uma Breve História do Tempo
                    </h2>

                    <p class="author">
                        Stephen Hawking
                    </p>

                    <div class="book-footer">

                        <span class="copies">
                            2 cópias
                        </span>

                        <button class="borrow-button">
                            Emprestar
                        </button>

                    </div>

                </div>

            </article>


            {{-- Livro 2 --}}
            <article
                class="book-card"
                data-search="cosmos carl sagan astronomia"
            >

                <div class="book-glow"></div>

                <div class="book-cover">

                    <div class="book-icon">
                        📖
                    </div>

                </div>

                <div class="book-content">

                    <div class="book-tags">

                        <span class="category-tag">
                            Astronomia
                        </span>

                        <span class="availability available">
                            Disponível
                        </span>

                    </div>

                    <h2>
                        Cosmos
                    </h2>

                    <p class="author">
                        Carl Sagan
                    </p>

                    <div class="book-footer">

                        <span class="copies">
                            3 cópias
                        </span>

                        <button class="borrow-button">
                            Emprestar
                        </button>

                    </div>

                </div>

            </article>


            {{-- Livro 3 --}}
            <article
                class="book-card"
                data-search="o gene egoísta richard dawkins biologia"
            >

                <div class="book-glow"></div>

                <div class="book-cover">

                    <div class="book-icon">
                        📖
                    </div>

                </div>

                <div class="book-content">

                    <div class="book-tags">

                        <span class="category-tag">
                            Biologia
                        </span>

                        <span class="availability available">
                            Disponível
                        </span>

                    </div>

                    <h2>
                        O Gene Egoísta
                    </h2>

                    <p class="author">
                        Richard Dawkins
                    </p>

                    <div class="book-footer">

                        <span class="copies">
                            1 cópia
                        </span>

                        <button class="borrow-button">
                            Emprestar
                        </button>

                    </div>

                </div>

            </article>


            {{-- Livro 4 --}}
            <article
                class="book-card"
                data-search="sapiens yuval noah harari história"
            >

                <div class="book-glow"></div>

                <div class="book-cover">

                    <div class="book-icon">
                        📖
                    </div>

                </div>

                <div class="book-content">

                    <div class="book-tags">

                        <span class="category-tag">
                            História
                        </span>

                        <span class="availability borrowed">
                            Emprestado
                        </span>

                    </div>

                    <h2>
                        Sapiens
                    </h2>

                    <p class="author">
                        Yuval Noah Harari
                    </p>

                    <div class="book-footer">

                        <span class="copies">
                            0 cópias
                        </span>

                        <button
                            class="borrow-button disabled"
                            disabled
                        >
                            Aguardando
                        </button>

                    </div>

                </div>

            </article>


            {{-- Livro 5 --}}
            <article
                class="book-card"
                data-search="o universo numa casca de noz stephen hawking física"
            >

                <div class="book-glow"></div>

                <div class="book-cover">

                    <div class="book-icon">
                        📖
                    </div>

                </div>

                <div class="book-content">

                    <div class="book-tags">

                        <span class="category-tag">
                            Física
                        </span>

                        <span class="availability available">
                            Disponível
                        </span>

                    </div>

                    <h2>
                        O Universo Numa Casca de Noz
                    </h2>

                    <p class="author">
                        Stephen Hawking
                    </p>

                    <div class="book-footer">

                        <span class="copies">
                            1 cópia
                        </span>

                        <button class="borrow-button">
                            Emprestar
                        </button>

                    </div>

                </div>

            </article>


            {{-- Livro 6 --}}
            <article
                class="book-card"
                data-search="a origem das espécies charles darwin biologia"
            >

                <div class="book-glow"></div>

                <div class="book-cover">

                    <div class="book-icon">
                        📖
                    </div>

                </div>

                <div class="book-content">

                    <div class="book-tags">

                        <span class="category-tag">
                            Biologia
                        </span>

                        <span class="availability available">
                            Disponível
                        </span>

                    </div>

                    <h2>
                        A Origem das Espécies
                    </h2>

                    <p class="author">
                        Charles Darwin
                    </p>

                    <div class="book-footer">

                        <span class="copies">
                            2 cópias
                        </span>

                        <button class="borrow-button">
                            Emprestar
                        </button>

                    </div>

                </div>

            </article>

        </section>


        {{-- Nenhum resultado --}}
        <section
            id="noResults"
            class="no-results"
            style="display: none;"
        >

            <p>
                Oops! Nenhum livro encontrado.
            </p>

            <span>
                Tente buscar por outro termo!
            </span>

        </section>

    </main>

</div>


<script>
document.addEventListener('DOMContentLoaded', function () {

    const searchInput = document.getElementById('bookSearch');
    const books = document.querySelectorAll('.book-card');
    const noResults = document.getElementById('noResults');

    searchInput.addEventListener('input', function () {

        const search = this.value
            .toLowerCase()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '');

        let visibleBooks = 0;

        books.forEach(function (book) {

            const content = book
                .dataset
                .search
                .toLowerCase()
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '');

            if (content.includes(search)) {

                book.style.display = '';

                requestAnimationFrame(() => {
                    book.classList.remove('book-hidden');
                });

                visibleBooks++;

            } else {

                book.classList.add('book-hidden');

                setTimeout(() => {
                    if (book.classList.contains('book-hidden')) {
                        book.style.display = 'none';
                    }
                }, 250);

            }

        });

        noResults.style.display =
            visibleBooks === 0 ? 'block' : 'none';

    });

});
</script>


