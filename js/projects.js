Vue.component('tab', {
    props: ['name', 'isActive', 'tab'],
    template: `<li class="tab"><a class=isActive v-bind:href=tab>{{name}}</a></li>`
})

Vue.component('projectcard', {
    props: ['image', 'title', 'description', 'link', 'codelink','language'],
    template: `
        
            <div class="card">
                <div class="card-image showTitle">
                    <div class="vertAlignWrapper view-overlay">
                        <a v-bind:href=link class="titleDisplay" target="_blank">
                            View Project
                        </a>
                    </div>
                    <img v-bind:src=image>
                </div>
                <div class="card-content">
                    <h5 class="headerBorder">{{title}}</h5>
                    <span style="color:gray">Language: {{language}}</span>
                    <p>
                    {{description}}
                    </p>
                </div>
                <div class="mt-auto">
                    <a v-bind:href=link target="_blank"><button class="btn btn-primary w-100">View Project</button></a>
                    <a v-bind:href=codelink target="_blank"><button class="btn btn-secondary w-100">View Code</button></a>
                </div>
            </div>
            

    
    `
})

Vue.component('project', {
    props: ['language', 'experience', 'image'],
    template: `
    <div data-aos='fade-right' style='border-radius:8%' class='card hoverable'>
                <div class='card-image'>
                    <img class='activator' v-bind:src=image v-bind:alt=language>
                </div>
                <div class='card-content'>
                    <span class='card-title grey-text text-darken-4 center-align headerBorderSolid'>{{language}}</span>
                    <p style="color:gray" class="center-align">{{experience}}</p>
                </div>

            </div>
            `
})

var app = new Vue({

    el: "#projects",



    data: {


    },

    methods: {



    }
})