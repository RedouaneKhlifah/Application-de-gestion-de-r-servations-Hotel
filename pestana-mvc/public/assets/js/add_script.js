const options = document.querySelector(".options");
const dropdowns = document.querySelector(".dropdowns");

options.addEventListener("change", () => {
  if (options.value == "suite") {
    html = `
    
    <div id="opts2" class="col-lg-2 mb-3">
    <label class="form-label" style="font-weight: 500"
      >Suite Type</label>
    <select class="options form-select shadow-none" name="type_suits" >
    <option class="opt" value="Standard ">Standard</option>
    <option class="opt" value="Junior">Junior</option>
    <option class="opt" value="Presidential">Presidential</option>
    <option class="opt" value="Penthouse">Penthouse</option>
    <option class="opt" value="Bridal">Bridal</option>
    </select>
  </div>`;
    dropdowns.insertAdjacentHTML("afterend", html);
  } else {
    const opts2 = document.getElementById("opts2");
    if (opts2) {
      opts2.remove();
    }
  }
  console.log("ed");
});
