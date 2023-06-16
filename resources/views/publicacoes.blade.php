<x-layout>
    <div class="page-header">
        <h1 class="title">Publicações</h1>
    </div>

    @auth
        <div class="new-publication">
        <form method="POST" action="/new-publication" >
            @csrf
            <label for="title">Titulo</label>
            <input type="text" name="title">
            <label for="body">Descrição</label>
            <input type="text" name="body">
            <label for="post-local">Onde foi publicado</label>
            <input type="text" name="post-local">
            <label for="post-date">Data</label>
            <input type="text" name="post-date">
            <label for="external-url">Link</label>
            <input type="text" name="external-url">
            <button>Publicar</button>
        </form>
    </div>
    @endauth


    <div class="publications-container">
        <div class="publication-card">
            <a href="#">
            <h2 class="publication-title">Entre o feitiço e a palavra escrita</h2>
            </a>
            <h3 class="publication-subtitle">Crítica do filme A morte branca do cavalheiro negro(2020)</h3>
            <section class="publication-info">
                <p class="published-in">Revista Fricções</p>
                <p class="publication-date">2021</p>
            </section>
        </div>
    </div>
</x-layout>