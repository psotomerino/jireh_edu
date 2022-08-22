
document.addEventListener("DOMContentLoaded", () => {
    
    const $boton = document.querySelector('#cert_2020');
    $boton.addEventListener ("click", () =>{
        const $elementosparaconvertir = document.querySelector('.cuerpo_A4');
        html2pdf()
            .set({
                margin: 1,
                filename: 'certificado matricula 2020.pdf',
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