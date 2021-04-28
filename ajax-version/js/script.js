var app = new Vue ({
    el: "#root",
    data: {
        posters: [],
    },
    mounted: function() {
        for (let i=0; i<6; i++) {
        axios
            .get("http://localhost/php-ajax-dischi/server.php")
            .then((result) => {
                this.posters.push(result.data[i]);
            })
        }
    }
})