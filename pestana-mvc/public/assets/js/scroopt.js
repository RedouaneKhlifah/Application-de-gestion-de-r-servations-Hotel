// const dropdowns = document.querySelector(".dropdowns");
// // const option = document.querySelectorAll(".opt");
// const check = document.querySelector(".check");
// const options = document.querySelector(".options");

// // option.forEach((element) => {
// //   element.addEventListener("click", function () {
// //     html = `<select name="adults" id="option">
// //         <option class="opt" value="Lit single ">Lit Lingle</option>
// //         <option class="opt" value="double">Lit Louble</option>
// //         <option class="opt" value="suite">Lit Luite</option>
// //       </select>`;

// //     dropdowns.insertAdjacentHTML("beforeend", html);
// //     console.log("working");
// //   });
// // });

// function check() {
//   if (options.value == "suite") {
//     html = `<select name="type_suits" class="options add-opts" id="opts2" >
//         <option class="opt" value="Standard ">Standard suite</option>
//         <option class="opt" value="Junior">Junior suite</option>
//         <option class="opt" value="Presidential">Presidential suite</option>
//         <option class="opt" value="Penthouse">Penthouse suite</option>
//         <option class="opt" value="Bridal">Bridal suite</option>
//       </select>`;
//     dropdowns.insertAdjacentHTML("beforeend", html);
//   } else {
//     const opts2 = document.getElementById("opts2");
//     if (opts2) {
//       opts2.remove();
//     }
//   }
//   console.log("ed");
// }

// // function suite() {
// //   html = `<select name="type_suits" class="options add-opts" id="opts2" >
// //         <option class="opt" value="Standard ">Standard suite</option>
// //         <option class="opt" value="Junior">Junior suite</option>
// //         <option class="opt" value="Presidential">Presidential suite</option>
// //         <option class="opt" value="Penthouse">Penthouse suite</option>
// //         <option class="opt" value="Bridal">Bridal suite</option>
// //       </select>`;
// //   dropdowns.insertAdjacentHTML("beforeend", html);
// //   console.log("ted");
// // }

// options.addEventListener("change", () => {
//   if (options.value == "suite") {
//     html = ` <select name="type_suits" class="options add-opts" id="opts2" >
//       <option class="opt" value="Standard ">Standard suite</option>
//       <option class="opt" value="Junior">Junior suite</option>
//       <option class="opt" value="Presidential">Presidential suite</option>
//       <option class="opt" value="Penthouse">Penthouse suite</option>
//       <option class="opt" value="Bridal">Bridal suite</option>
//     </select>`;
//     dropdowns.insertAdjacentHTML("beforeend", html);
//   } else {
//     const opts2 = document.getElementById("opts2");
//     if (opts2) {
//       opts2.remove();
//     }
//   }
//   console.log("ed");
// });
// function removeAllChild(parent) {
//   while (parent.firstChild) {
//     parent.removeChild(parent.firstChild);
//   }
// }

// var select = document.getElementById("roomtype");
// const selectContainer = document.querySelector(".selectContainer");
// const guestSection = document.querySelector(".guestSection");

// let SuiteType = document.querySelector(".SuiteType");
// let nbPersonne = document.getElementById("nbPersonne");

// select.addEventListener("change", function () {
//   // if (guestSection) {
//   //   guestSection.remove();
//   // }
//   if (select.value == "suite") {
//     let html_Suit = `
//     <div class  = "SuiteType">
//         <label for="suitetype">Suite Type</label>
//         <select class="suitetype" name="roomtype">
//         <option value="standard">Standard</option>
//         <option value="junior">Junior</option>
//         <option value="presidential">Presidential</option>
//         <option value="penthouse">Penthouse</option>
//         <option value="honeymoon">Honeymoon</option>
//         <option value="bridal">Bridal</option>
//         </select> </div>`;

//     let html_NumPerson = `<div id  ="nbPersonne">
//         <label for="guests">Number of guests:</label>
//         <select id="guests" name="guests">
//         <option value="0">0</option>
//         <option value="1">1</option>
//         <option value="2">2</option>
//         <option value="3">3</option>
//         <option value="4">4</option>
//         <option value="5">5</option>
//         <option value="6">6</option>
//         </select> </div>`;

//     let html_guest = `<div class ="guestSection" ></div>`;

//     selectContainer.insertAdjacentHTML("beforeend", html_Suit);
//     selectContainer.insertAdjacentHTML("beforeend", html_NumPerson);
//     selectContainer.insertAdjacentHTML("beforeend", html_guest);

//     let guests = document.getElementById("guests");

//     guests.addEventListener("change", function () {
//       let guest_form = document.getElementById("guest_form");
//       const guestSection = document.querySelector(".guestSection");
//       removeAllChild(guestSection);
//       let value = Number(guests.value);
//       if (value > 0) {
//         let i = 1;
//         while (i <= value) {
//           let html_guests = `
//           <form calss="guest_form"   action="<?php BURL ?>/user/booking" method="POST"">
//           <label>Guest First Name ${i} :</label>
//                       <input type="text" name="guestfname">
//                       <label>Guest Last Name ${i} :</label>
//                       <input type="text" name="guestlname">
//                       <label for="dob">Guest Date of birth ${i} :</label>
//                       <input type="date" id="dob" name="dob" min="1950-01-01" max="2000-01-01">
//                       </form>`;

//           guestSection.insertAdjacentHTML("beforeend", html_guests);
//           i++;
//         }
//       }
//     });
//   } else if (select.value == "double") {

//   }
// });

//   if (SuiteType && nbpersonne && guest_form) {
//     SuiteType.remove();
//     nbpersonne.remove();
//     guest_form.remove();
//   }
//   let i = 1;
//   while (i <= 2) {
//     let html_guests = `
//     <form calss="guest_form"   action="<?php BURL ?>/user/booking" method="POST"">
//     <label>Guest First Name ${i} :</label>
//                 <input type="text" name="guestfname">
//                 <label>Guest Last Name ${i} :</label>
//                 <input type="text" name="guestlname">
//                 <label for="dob">Guest Date of birth ${i} :</label>
//                 <input type="date" id="dob" name="dob" min="1950-01-01" max="2000-01-01">
//                 </form>`;
//     selectContainer.insertAdjacentHTML("beforeend", html_guests);
//     i++;
//   }
// }

// let SuiteType = document.querySelector(".SuiteType");
// let nbPersonne = document.getElementById("nbPersonne");
// let guestSection = document.querySelector(".guestSection");
// if (SuiteType && nbPersonne) {
//   SuiteType.remove();
//   nbPersonne.remove();
//   guestSection.remove();
// }

// let i = 1;
// let guest_html = `<div class ="guestSection" ></div>`;
// selectContainer.insertAdjacentHTML("beforeend", guest_html);
// while (i <= 2) {
//   let html_guests = `
// <form calss="guest_form"   action="<?php BURL ?>/user/booking" method="POST"">
// <label>Guest First Name ${i} :</label>
//             <input type="text" name="guestfname">
//             <label>Guest Last Name ${i} :</label>
//             <input type="text" name="guestlname">
//             <label for="dob">Guest Date of birth ${i} :</label>
//             <input type="date" id="dob" name="dob" min="1950-01-01" max="2000-01-01">
//             </form>`;

//   guestSection.insertAdjacentHTML("beforeend", html_guests);
//   i++;
// }

function check(value, type_suits) {
  let guest_type_container = document.querySelector(".guest_type_container");
  guest_type_container.innerHTML = "";
  if (value === "suite") {
    let html = ` 
    <div class="form-outline mb-2">
    <label class="form-label text-black" for="form2Example17">Type of room </label>
    <input name="gmail" type="email" id="form2Example17" class="form-control form-control-lg fs-6" value="${type_suits}" readonly />
  </div>       

    <label for="guests">Number of guests:</label>
    <select name  = "number_of_guests" id="guests" name="guests">
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    </select>
    <div id="guestSection"></div>`;
    guest_type_container.innerHTML = html;
  } else if (value === "double") {
    let html = `
    <label for="guests">Number of guests:</label>
    <select name  = "number_of_guests" id="guests" name="guests">
    <option value="0">0</option>
    <option value="1">1</option>
    </select>
    <div id="guestSection"></div>
`;

    guest_type_container.innerHTML = html;
  }
}

function guest_form() {
  const guests = document.getElementById("guests");
  if (guests) {
    guests.addEventListener("change", function () {
      document.getElementById("guestSection").innerHTML = "";
      let value = Number(guests.value);
      if (value > 0) {
        let i = 1;
        while (i <= value) {
          document.getElementById("guestSection").innerHTML += `
                      <label>Guest First Name ${i} :</label>
                      <input type="text" name="guestfname${i}">
                      <label>Guest Last Name ${i} :</label>
                      <input type="text" name="guestlname${i}">
                      <label for="dob">Guest Date of birth 1 :</label>
                      <input type="date" id="dob" name="guest_birthday${i}" min="1950-01-01" max="2000-01-01"> `;

          i++;
        }
      }
    });
  }
}

{
  /* <label for="dob">Guest Date of birth 1 :</label>
<input type="date" id="dob" name="dob" min="1950-01-01" max="2000-01-01"> */
}
// function gettodaydate(){
// var dateObj = new Date();
// var month = dateObj.getUTCMonth() + 1; //months from 1-12
// var day = dateObj.getUTCDate();
// var year = dateObj.getUTCFullYear();

// let today = `${year}-${month}-${day}`;
// return today;
// }

// document.getElementById("date_s").value = today;

// document.getElementById("date_e").setAttribute("min", today);

//pop up //;
