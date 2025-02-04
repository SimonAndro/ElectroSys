$(document).ready(() => {
        candidate_populate();
    })
    // JQUERY AREA
function candidate_populate() {
    candidate_array.map((candidate, index) => {
        // loadingHide();
        console.log(candidate);
        const candidateTemplate = `
            <li id='${candidate.id}' class='candidate-wrapper'>
                <div class='candidate-image' style="background-image:url(${candidate.image});"></div>
                <div class='candidate-name text'>${candidate.name}</div>
                <div class='candidate-position text'>${candidate.position}</div>
                <div class='candidate-options'>
                    <a id='${candidate.id}_choose' data-link='confirm.php' data-index='${index}' class='button button-vote text'>CHOOSE</a>
                </div>
            </li>
        `
        $('.candidateList').append(candidateTemplate);
    });
}


// JQUERY AREA
$('.candidateList').on('click', '.button-vote', (e) => {
    // const candidate
    var id = '#' + e.target.id;
    var link = $(id).data('link');
    var index = $(id).data('index');
    // candidate_selected = getRecord('candidate_selected');
    // console.log(`cockie_way:${candidate_selected}`);
    setRecord('candidate_selected', index, 1);
    candidate_selected = getRecord('candidate_selected');
    console.log('Selected -> currentSelected Candidate:' + candidate_selected + ' ' + candidate_array[candidate_selected].name);
    window.location.href = link;

});