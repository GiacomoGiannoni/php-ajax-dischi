const app = new Vue({
    el: '#app',
    data: {
        albums: [],
        selectedGenre: '',
    },
    methods: {
        getAlbums: function() {
            if(this.selectedGenre == '') {
                axios.get('http://localhost/php-ajax-dischi/SecondaVersione/controller.php')
                    .then(response => {
                        this.albums = response.data;
                    }).catch(error => {
                        console.log(error);
                    }
                );
            } else {
                axios.get('http://localhost/php-ajax-dischi/SecondaVersione/controller.php?genre=' + this.selectedGenre)
                    .then(response => {
                        this.albums = response.data;
                    }).catch(error => {
                        console.log(error);
                    }
                );
            }
        },
    },
    created: function() {
        this.getAlbums();
    },
});