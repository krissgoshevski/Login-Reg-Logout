class ProductDescription {



    displayInputs() {
        var select = document.getElementById("category_id_fk");
        var cd = document.getElementById("cd");
        var furniture = document.getElementById("furniture");
        var book = document.getElementById("book");
        var desc = document.getElementById("description");
        var pr_desc = document.getElementById("product-description");
        var sku = document.getElementById("sku");

        select.addEventListener("change", (e) => {
            var selectedOption = select.options[select.selectedIndex].value;


            cd.style.display = "none";
            furniture.style.display = "none";
            book.style.display = "none";
            desc.style.display = "none";
            pr_desc.style.display = "none";
            if (selectedOption === '6DlyNw6ZPVVoc1QA/OYoKQ==') {

                cd.style.display = "block";
                desc.style.display = "block";
                pr_desc.style.display = "block";
                pr_desc.value = 'Your selected category is CD/DVD, now please insert #Size(MB) for the CD/DVD.';
                sku.value = "CD-";
                //  pr_desc.setAttribute("readonly", "readonly");
            } else if (selectedOption === 'OF4PxPTGWyFzi68yKeWB0g==') {
                furniture.style.display = "block";
                desc.style.display = "block";
                pr_desc.style.display = "block";
                pr_desc.value = 'Your selected category is Furniture, now please insert Height(CM), Width(CM) and Length(CM) for the Furniture.';
                //  pr_desc.setAttribute("readonly", "readonly");
                sku.value = "FU-";

            } else if (selectedOption === 'HHb94jlR+e4EQPchorrvsg==') {
                book.style.display = "block";
                desc.style.display = "block";
                pr_desc.style.display = "block";
                pr_desc.value = 'Your selected category is Book, now please insert #Weight for the book';
                //  pr_desc.setAttribute("readonly", "readonly");
                sku.value = "BO-";
            } else {
                cd.style.display = "none";
                furniture.style.display = "none";
                book.style.display = "none";
                desc.style.display = "block";
                pr_desc.style.display = "block";
                pr_desc.value = 'Please, choose one category from first three categories!';
                //  pr_desc.removeAttribute("readonly");
            }
        });
    }

}