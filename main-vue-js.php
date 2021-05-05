<!-- Stampa dischi con chiamata Axios in Vue -->
<ul class="album-list">
  <li v-for="album in albumList">
    <img class="cover-img" :src="album.poster" :alt="album.title">
    <h2>{{album.title}}</h2>
    <h4>{{album.author}}</h4>
    <h4>{{album.year}}</h4>
  </li>
</ul>
