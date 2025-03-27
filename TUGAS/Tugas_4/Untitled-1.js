function cekNilai() {
    let nim = document.getElementById("nim").value;
    let nilai = parseInt(document.getElementById("nilai").value);
    let output = document.getElementById("output");
    let hurufMutu;

    if (isNaN(nilai) || nilai < 0 || nilai > 100) {
        output.innerHTML = "Nilai tidak valid!";
        output.style.color = "red";
        return;
    }

    if (nilai >= 80) {
        hurufMutu = "A";
    } else if (nilai >= 70) {
        hurufMutu = "B";
    } else if (nilai >= 60) {
        hurufMutu = "C";
    } else if (nilai >= 50) {
        hurufMutu = "D";
    } else {
        hurufMutu = "E";
    }

    output.innerHTML = `NIM: ${nim} <br> Nilai: ${nilai} <br> Huruf Mutu: <strong>${hurufMutu}</strong>`;
    output.style.color = "black";
}