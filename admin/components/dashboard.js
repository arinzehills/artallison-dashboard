class Dashboard extends HTMLElement {
  constructor() {
    super();
    this.innerHTML = `<div class="insights">
      <div class="total_users">
        <div class="insight_icon">
          <span class="material-symbols-outlined"> group </span>
        </div>

        <h3>Total Number of Users</h3>
        <h1>${this.getAttribute('numOfUsers')}</h1>
      </div>
      <div class="total_visits">
        <div>
          <span class="material-symbols-outlined"> tour </span>
        </div>
        <h3>Total Visits</h3>
        <h1>${this.getAttribute('visits')}</h1>
      </div>
      <div class="art_gallery">
        <div>
          <span class="material-symbols-outlined">
            network_intelligence
          </span>
        </div>
        <h3>Arts in Gallery</h3>
        <h1>${this.getAttribute('numInGallery')}</h1>
      </div>
    </div>
    
    </div>
    `;
  }
}
window.customElements.define("dashboard-component", Dashboard);
