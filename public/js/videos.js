const podcast = [
    {
        id:'-5vJCDMKF_I',
    },
    {
        id:'ChISk-VXWTU',
    },
    {
        id:'b-ymP7TwtLA',
    },
    {
        id:'dAwYQZxDj5k',
    },
];

renderCurrentVideo(podcast[current].id);

function renderCurrentVideo(id) {
    currenteContainer.innerHTML = `<iframe width="100%" height="833" src="https://www.youtube.com/embed/${id}" title="RICARDO MOLINARI • LOOPS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`;
}

function renderVideos (){
    const html =podcast.map(video => {
        return `
        <div class="item">
            <a href="#">
                <img src="" />
            </a>
        </div>`;
    });
}