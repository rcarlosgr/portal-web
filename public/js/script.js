const id = document.getElementById.bind(document)
const q = document.querySelector.bind(document)
const all = document.querySelectorAll.bind(document)

const openCloseMenu = () => {
    id('menuMobile').classList.toggle('open-menu-mobile')
}
const closeMenu = (e) => {
    if (e.target === id('menuMobile')) {
        openCloseMenu()
    }
}
const showHideArrow = (element) => {
    element.addEventListener('click', () => {
        all('.menu-item-deploy-mobile > .icon-up-mobile').forEach(el => {
            if (el.parentNode === element) {
                el.classList.toggle('icon-hide-mobile')
            }
        })
        all('.menu-item-deploy-mobile > .icon-down-mobile').forEach(el => {
            if (el.parentNode === element) {
                el.classList.toggle('icon-hide-mobile')
            }
        })

    })
}
const openSubmenu = (element) => {
    element.addEventListener('click', () => {
        all('.menu-item-deploy-mobile ~ .submenu-mobile').forEach(el => {
            if (el.parentNode === element.parentNode){
                el.classList.toggle('open-submenu-mobile')
            }
        })
    })

}



if (id('closeModalCourseOne')) {
    id('closeModalCourseOne').addEventListener('click', () => {
        id('modalCourseOne').classList.toggle('open-modal-course')
    })
}
if(id('courseItemOne')){
    id('courseItemOne').addEventListener('click', () => {
        id('modalCourseOne').classList.toggle('open-modal-course')
    })
}
if(id('modalCourseOne')){
    id('modalCourseOne').addEventListener('click', (e) => {
        if (e.target === id('modalCourseOne')){
            id('modalCourseOne').classList.toggle('open-modal-course')
        }
    })
}

if(id('closeModalCourseTwo')){
    id('closeModalCourseTwo').addEventListener('click', () => {
        id('modalCourseTwo').classList.toggle('open-modal-course')
    })
}
if(id('courseItemTwo')){
    id('courseItemTwo').addEventListener('click', () => {
        id('modalCourseTwo').classList.toggle('open-modal-course')
    })
}
if(id('modalCourseTwo')){
    id('modalCourseTwo').addEventListener('click', (e) => {
        if (e.target === id('modalCourseTwo')){
            id('modalCourseTwo').classList.toggle('open-modal-course')
        }
    })
}
if(id('closeModalCourseThree')){
    id('closeModalCourseThree').addEventListener('click', () => {
        id('modalCourseThree').classList.toggle('open-modal-course')
    })
}
if(id('courseItemThree')){
    id('courseItemThree').addEventListener('click', () => {
        id('modalCourseThree').classList.toggle('open-modal-course')
    })
}
if(id('modalCourseThree')){
    id('modalCourseThree').addEventListener('click', (e) => {
        if (e.target === id('modalCourseThree')){
            id('modalCourseThree').classList.toggle('open-modal-course')
        }
    })
}

if(id('closeModalCourseFour')){
    id('closeModalCourseFour').addEventListener('click', () => {
        id('modalCourseFour').classList.toggle('open-modal-course')
    })
}
if(id('courseItemFour')){
    id('courseItemFour').addEventListener('click', () => {
        id('modalCourseFour').classList.toggle('open-modal-course')
    })
}
if(id('modalCourseFour')){
    id('modalCourseFour').addEventListener('click', (e) => {
        if (e.target === id('modalCourseFour')){
            id('modalCourseFour').classList.toggle('open-modal-course')
        }
    })
}

if(id('closeModalCourseFive')){
    id('closeModalCourseFive').addEventListener('click', () => {
        id('modalCourseFive').classList.toggle('open-modal-course')
    })
}
if(id('courseItemFive')){
    id('courseItemFive').addEventListener('click', () => {
        id('modalCourseFive').classList.toggle('open-modal-course')
    })
}
if(id('modalCourseFive')){
    id('modalCourseFive').addEventListener('click', (e) => {
        if (e.target === id('modalCourseFive')){
            id('modalCourseFive').classList.toggle('open-modal-course')
        }
    })
}
if(id('closeModalCourseSix')){
    id('closeModalCourseSix').addEventListener('click', () => {
        id('modalCourseSix').classList.toggle('open-modal-course')
    })
}
if(id('courseItemSix')){
    id('courseItemSix').addEventListener('click', () => {
        id('modalCourseSix').classList.toggle('open-modal-course')
    })
}
if(id('modalCourseSix')){
    id('modalCourseSix').addEventListener('click', (e) => {
        if (e.target === id('modalCourseSix')){
            id('modalCourseSix').classList.toggle('open-modal-course')
        }
    })
}

//desplegar los submenu
let menuItemDeploy = all('.menu-item-deploy-mobile')
menuItemDeploy.forEach(element => openSubmenu(element))
//mostrar y quitar las flechas arriba y abajo
menuItemDeploy.forEach(element => showHideArrow(element))
//abrir menu
id('openMenuMobile').addEventListener('click', openCloseMenu)
//cerrar menu haciendo click fuera del menu
id('menuMobile').addEventListener('click', closeMenu)



// if(id('comments')){
//     let w = window.innerWidth
//     let a = 0
//     id('contentComments').addEventListener('mousemove', (e) => {
//         if (e.screenX > w) {
//             a+=2
//             w = e.screenX
//         }else{
//             a-=2
//             w = e.screenX
//         }
//         id('contentComments').style.transform = "translateX("+a+"px)"

//     })
// }

// modal para descripcion de los docentes
if (id('ourTeamOne')) {
    id('ourTeamOne').addEventListener('click', () => {
        id('modalTeamOne').classList.toggle('open-modal-team')
    })
}
if (id('closeModalTeamOne')) {
    id('closeModalTeamOne').addEventListener('click', () => {
        id('modalTeamOne').classList.toggle('open-modal-team')
    })
}
if (id('modalTeamOne')) {
    id('modalTeamOne').addEventListener('click', (e) => {
        if (e.target === id('modalTeamOne')) {
            id('modalTeamOne').classList.toggle('open-modal-team')
        }
    })
}

if (id('ourTeamTwo')) {
    id('ourTeamTwo').addEventListener('click', () => {
        id('modalTeamTwo').classList.toggle('open-modal-team')
    })
}
if (id('closeModalTeamTwo')) {
    id('closeModalTeamTwo').addEventListener('click', () => {
        id('modalTeamTwo').classList.toggle('open-modal-team')
    })
}
if (id('modalTeamTwo')) {
    id('modalTeamTwo').addEventListener('click', (e) => {
        if (e.target === id('modalTeamTwo')) {
            id('modalTeamTwo').classList.toggle('open-modal-team')
        }
    })
}

if (id('ourTeamThree')) {
    id('ourTeamThree').addEventListener('click', () => {
        id('modalTeamThree').classList.toggle('open-modal-team')
    })
}
if (id('closeModalTeamThree')) {
    id('closeModalTeamThree').addEventListener('click', () => {
        id('modalTeamThree').classList.toggle('open-modal-team')
    })
}
if (id('modalTeamThree')) {
    id('modalTeamThree').addEventListener('click', (e) => {
        if (e.target === id('modalTeamThree')) {
            id('modalTeamThree').classList.toggle('open-modal-team')
        }
    })
}

// modal para consultoria

if (id('consultancyItemOne')) {
    id('consultancyItemOne').addEventListener('click', () => {
        id('modalConsultancyOne').classList.toggle('open-modal-consultancy')
    })
}
if (id('closeModalConsultancyOne')) {
    id('closeModalConsultancyOne').addEventListener('click', () => {
        id('modalConsultancyOne').classList.toggle('open-modal-consultancy')
    })
}
if (id('modalConsultancyOne')) {
    id('modalConsultancyOne').addEventListener('click', (e) => {
        if (e.target === id('modalConsultancyOne')) {
            id('modalConsultancyOne').classList.toggle('open-modal-consultancy')
        }
    })
}


if (id('consultancyItemTwo')) {
    id('consultancyItemTwo').addEventListener('click', () => {
        id('modalConsultancyTwo').classList.toggle('open-modal-consultancy')
    })
}
if (id('closeModalConsultancyTwo')) {
    id('closeModalConsultancyTwo').addEventListener('click', () => {
        id('modalConsultancyTwo').classList.toggle('open-modal-consultancy')
    })
}
if (id('modalConsultancyTwo')) {
    id('modalConsultancyTwo').addEventListener('click', (e) => {
        if (e.target === id('modalConsultancyTwo')) {
            id('modalConsultancyTwo').classList.toggle('open-modal-consultancy')
        }
    })
}


if (id('consultancyItemThree')) {
    id('consultancyItemThree').addEventListener('click', () => {
        id('modalConsultancyThree').classList.toggle('open-modal-consultancy')
    })
}
if (id('closeModalConsultancyThree')) {
    id('closeModalConsultancyThree').addEventListener('click', () => {
        id('modalConsultancyThree').classList.toggle('open-modal-consultancy')
    })
}
if (id('modalConsultancyThree')) {
    id('modalConsultancyThree').addEventListener('click', (e) => {
        if (e.target === id('modalConsultancyThree')) {
            id('modalConsultancyThree').classList.toggle('open-modal-consultancy')
        }
    })
}


















// modal projecto
if (id('projectItemOne')) {
    id('projectItemOne').addEventListener('click', () => {
        id('modalProjectOne').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectCloseOne')){
    id('modalProjectCloseOne').addEventListener('click', () => {
        id('modalProjectOne').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectOne')){
    id('modalProjectOne').addEventListener('click', (e) => {
        if (e.target === id('modalProjectOne')) {
            id('modalProjectOne').classList.toggle('open-modal-project')
        }
    })
}

if (id('projectItemTwo')) {
    id('projectItemTwo').addEventListener('click', () => {
        id('modalProjectTwo').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectCloseTwo')){
    id('modalProjectCloseTwo').addEventListener('click', () => {
        id('modalProjectTwo').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectTwo')){
    id('modalProjectTwo').addEventListener('click', (e) => {
        if (e.target === id('modalProjectTwo')) {
            id('modalProjectTwo').classList.toggle('open-modal-project')
        }
    })
}

if (id('projectItemThree')) {
    id('projectItemThree').addEventListener('click', () => {
        id('modalProjectThree').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectCloseThree')){
    id('modalProjectCloseThree').addEventListener('click', () => {
        id('modalProjectThree').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectThree')){
    id('modalProjectThree').addEventListener('click', (e) => {
        if (e.target === id('modalProjectThree')) {
            id('modalProjectThree').classList.toggle('open-modal-project')
        }
    })
}

if (id('projectItemFour')) {
    id('projectItemFour').addEventListener('click', () => {
        id('modalProjectFour').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectCloseFour')){
    id('modalProjectCloseFour').addEventListener('click', () => {
        id('modalProjectFour').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectFour')){
    id('modalProjectFour').addEventListener('click', (e) => {
        if (e.target === id('modalProjectFour')) {
            id('modalProjectOFour').classList.toggle('open-modal-project')
        }
    })
}

if (id('projectItemFive')) {
    id('projectItemFive').addEventListener('click', () => {
        id('modalProjectFive').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectCloseFive')){
    id('modalProjectCloseFive').addEventListener('click', () => {
        id('modalProjectFive').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectFive')){
    id('modalProjectFive').addEventListener('click', (e) => {
        if (e.target === id('modalProjectFive')) {
            id('modalProjectFive').classList.toggle('open-modal-project')
        }
    })
}

if (id('projectItemSix')) {
    id('projectItemSix').addEventListener('click', () => {
        id('modalProjectSix').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectCloseSix')){
    id('modalProjectCloseSix').addEventListener('click', () => {
        id('modalProjectSix').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectSix')){
    id('modalProjectSix').addEventListener('click', (e) => {
        if (e.target === id('modalProjectSix')) {
            id('modalProjectSix').classList.toggle('open-modal-project')
        }
    })
}

if (id('projectItemSeven')) {
    id('projectItemSeven').addEventListener('click', () => {
        id('modalProjectSeven').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectCloseSeven')){
    id('modalProjectCloseSeven').addEventListener('click', () => {
        id('modalProjectSeven').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectSeven')){
    id('modalProjectSeven').addEventListener('click', (e) => {
        if (e.target === id('modalProjectSeven')) {
            id('modalProjectSeven').classList.toggle('open-modal-project')
        }
    })
}

if (id('projectItemEight')) {
    id('projectItemEight').addEventListener('click', () => {
        id('modalProjectEight').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectCloseEight')){
    id('modalProjectCloseEight').addEventListener('click', () => {
        id('modalProjectEight').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectEight')){
    id('modalProjectEight').addEventListener('click', (e) => {
        if (e.target === id('modalProjectEight')) {
            id('modalProjectEight').classList.toggle('open-modal-project')
        }
    })
}

if (id('projectItemNine')) {
    id('projectItemNine').addEventListener('click', () => {
        id('modalProjectNine').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectCloseNine')){
    id('modalProjectCloseNine').addEventListener('click', () => {
        id('modalProjectNine').classList.toggle('open-modal-project')
    })
}
if(id('modalProjectNine')){
    id('modalProjectNine').addEventListener('click', (e) => {
        if (e.target === id('modalProjectNine')) {
            id('modalProjectNine').classList.toggle('open-modal-project')
        }
    })
}

const validateForm = (e) => {
    e.preventDefault()
    data = new FormData(id('formContact'))
    id('messageForm').innerHTML = '... cargando'
    id('messageForm').classList.remove('message-form-success')
    id('messageForm').classList.remove('message-form-error')
    id('messageForm').classList.add('loader-fetch')

    fetch('/enviar-email', {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(res => {
        if (res.type === 'error') {
            id('messageForm').innerHTML = res.message
            id('messageForm').classList.remove('message-form-success')
            id('messageForm').classList.remove('loader-fetch')
            id('messageForm').classList.add('message-form-error')

        }else if (res.type === 'success'){
            id('messageForm').innerHTML = res.message
            id('messageForm').classList.remove('message-form-error')
            id('messageForm').classList.remove('loader-fetch')
            id('messageForm').classList.add('message-form-success')

            id('formContact').reset()

        }

    })
}

// validando formulario
if  (id('btnSendMessage')) {
    id('btnSendMessage').addEventListener('click', validateForm)
}
