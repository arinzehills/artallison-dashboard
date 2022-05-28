class PageTitle extends HTMLElement {
  constructor() {
    super();
    this.innerHTML = `
        <h1>${this.getAttribute("pageTitle") ?? "Dashboard"}</h1>
        <div class="date">
          <input type="date" name="" id="" />
        </div>`;
  }
}
window.customElements.define("page-title", PageTitle);
