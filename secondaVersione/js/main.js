const app = new Vue({
    el: '#app',
    data: {
        albums: [],
    },
    methods: {
        getAlbums: function() {
            axios.get('http://localhost/php-ajax-dischi/SecondaVersione/controller.php')
            .then(response => {
                this.albums = response.data;
                console.log(this.albums);
            }).catch(error => {
                console.log(error);
            });
        }
    },
    created: function() {
        this.getAlbums();
    }
});