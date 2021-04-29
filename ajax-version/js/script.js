var app = new Vue ({
    el: "#root",
    data: {
        posters: [],
        author: [],
        filterAuthor: "all",
    },
    mounted: function() {
    //     for (let i=0; i<6; i++) {
    //     axios
    //         .get("http://localhost/php-ajax-dischi/server.php")
    //         .then((result) => {
    //             // console.log(result);
    //             this.posters.push(result.data[i]);
    //             if (!this.author.includes(result.data[i]["author"])) {
    //                 this.author.push(result.data[i]["author"]);
    //             }
    //             console.log(this.posters);
    //             // console.log(this.author);
    //         })
    //     }
    this.getPoster()
    },
    methods: {
        getPoster() {
            this.posters = [];
            axios
                .get("http://localhost/php-ajax-dischi/server.php?author=" + this.filterAuthor)
                .then((result) => {
                    this.posters = result.data;
                    result.data.forEach(element => {
                        if (!this.author.includes(element["author"])) {
                            this.author.push(element["author"]);
                        }
                    });
                    console.log(this.posters);
                })
        }
        // filter() {
        //     axios
        //     .get("http://localhost/php-ajax-dischi/server.php?author=" + this.filterAuthor)
        //     .then((res) => {
        //         console.log(res);
        //         this.posterfilter.splice(0, 1, res.data);
        //         console.log(this.posterfilter);
        //     })
        //     this.filterAuthor = document.getElementById("filter_author").value;
        //     if (this.filterAuthor == "all") {
        //         this.filterAuthor = "";
        //     }
        //     // console.log(this.posterfilter);
        //     console.log(this.filterAuthor);
        // }
    }
})
Vue.config.devtools = true;