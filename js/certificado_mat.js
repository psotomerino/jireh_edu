
document.addEventListener("DOMContentLoaded", () => {    

    const $boton = document.querySelector('#cert_');
    $boton.addEventListener ("click", () =>{
        
        const $nom_ = $('#nombres_certificado').text();
        const $ape_ = $('#apellidos_certificado').text();
        const $elementosparaconvertir = document.querySelector('.cuerpo_A4');
        html2pdf()
            .set({
                margin: 1,
                filename: $nom_+' '+$ape_+'.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.99
                },
                html2canvas: {
                    scale: 3, // A mayor escala, mejores gráficos, pero más peso
                    letterRendering: true,
                },
                jsPDF: {
                    unit: "in",
                    format: "a4",
                    orientation: 'portrait' // landscape o portrait
                }
            })
            .from($elementosparaconvertir)
            .save()
            .catch(err => console.log(err));
        
    });
});