class PageTitle extends HTMLElement {
  constructor() {
    super();
    this.innerHTML = `<h1>Dashboard</h1>
        <div class="date">
          <input type="date" name="" id="" />
        </div>`;
  }
}
window.customElements.define("page-title", PageTitle);
