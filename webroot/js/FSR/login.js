function populate() {

    var xhr = new XMLHttpRequest(),
        method = 'POST',
        overrideMimeType = 'application/json',
        url = '../../../View/login/index.php';

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // PARSE JSON DATA.
            var pays = JSON.parse(xhr.responseText);

            var ele = document.getElementById('pays-dropdown');
            for (var i = 0; i < pays.length; i++) {
                // BIND DATA TO <select> ELEMENT.
                ele.innerHTML = ele.innerHTML +
                    '<option value="' + pays[i].country_id + '" onclick="checkPays(' + pays[i].country_id + ')">' + pays[i].pays + '</option>';
            }
        }
    };
    xhr.open(method, url, true);
    xhr.send();
}

$(function(){
    console.log("bvfurdgbfkj");
});

