Vue.component('card', {
    props: ['language', 'experience','image'],
    template:
    `<div data-aos='fade-right' style='border-radius:8%' class='card hoverable'>
                <div class='card-image'>
                    <img class='activator' v-bind:src=image v-bind:alt=language>
                </div>
                <div class='card-content'>
                    <span class='card-title grey-text text-darken-4 center-align headerBorderSolid'>{{language}}</span>
                    <p style="color:gray" class="center-align">{{experience}}</p>
                </div>

            </div>`
})

var app = new Vue({

    el: "#cards",
    
    data: {
      

    },

    methods: {

       

    }
})