(()=>{"use strict";var e={20:(e,r,t)=>{var o=t(609),n=Symbol.for("react.element"),s=(Symbol.for("react.fragment"),Object.prototype.hasOwnProperty),c=o.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED.ReactCurrentOwner,l={key:!0,ref:!0,__self:!0,__source:!0};r.jsx=function(e,r,t){var o,i={},a=null,u=null;for(o in void 0!==t&&(a=""+t),void 0!==r.key&&(a=""+r.key),void 0!==r.ref&&(u=r.ref),r)s.call(r,o)&&!l.hasOwnProperty(o)&&(i[o]=r[o]);if(e&&e.defaultProps)for(o in r=e.defaultProps)void 0===i[o]&&(i[o]=r[o]);return{$$typeof:n,type:e,key:a,ref:u,props:i,_owner:c.current}}},848:(e,r,t)=>{e.exports=t(20)},609:e=>{e.exports=window.React}},r={};function t(o){var n=r[o];if(void 0!==n)return n.exports;var s=r[o]={exports:{}};return e[o](s,s.exports,t),s.exports}(()=>{var e=t(609);const r=window.wp.element,o=(0,r.forwardRef)((function({icon:e,size:t=24,...o},n){return(0,r.cloneElement)(e,{width:t,height:t,...o,ref:n})})),n=window.wp.primitives;var s=t(848);const c=(0,s.jsx)(n.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24",children:(0,s.jsx)(n.Path,{fillRule:"evenodd",clipRule:"evenodd",d:"M12 18.5a6.5 6.5 0 1 1 0-13 6.5 6.5 0 0 1 0 13ZM4 12a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm8 4a4 4 0 0 0 4-4H8a4 4 0 0 0 4 4Z"})}),l=(0,s.jsx)(n.SVG,{viewBox:"0 0 24 24",xmlns:"http://www.w3.org/2000/svg",children:(0,s.jsx)(n.Path,{d:"M17 10h-1.2V7c0-2.1-1.7-3.8-3.8-3.8-2.1 0-3.8 1.7-3.8 3.8v3H7c-.6 0-1 .4-1 1v8c0 .6.4 1 1 1h10c.6 0 1-.4 1-1v-8c0-.6-.4-1-1-1zM9.8 7c0-1.2 1-2.2 2.2-2.2 1.2 0 2.2 1 2.2 2.2v3H9.8V7zm6.7 11.5h-9v-7h9v7z"})});document.addEventListener("DOMContentLoaded",(()=>{wporgCourseOutlineData["in-progress"]?.forEach((t=>{document.querySelectorAll(".wp-block-sensei-lms-course-outline-lesson").forEach((n=>{const s=n.querySelector("span");if(s&&s.textContent.trim()===t){const t=n.querySelector(".wp-block-sensei-lms-course-outline-lesson__status");t&&(t.outerHTML=(0,r.renderToString)((0,e.createElement)(o,{icon:c,transform:"scale(1.5)"})))}}))})),wporgCourseOutlineData.locked?.forEach((t=>{document.querySelectorAll(".wp-block-sensei-lms-course-outline-lesson").forEach((n=>{const s=n.querySelector("span");s&&s.textContent.trim()===t&&s.insertAdjacentHTML("afterend",(0,r.renderToString)((0,e.createElement)(o,{icon:l})))}))}))}))})()})();