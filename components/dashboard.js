class Dashboard extends HTMLElement {
  constructor() {
    super();
    this.innerHTML = `<div class="insights">
      <div class="total_users">
        <div class="insight_icon">
          <span class="material-symbols-outlined"> group </span>
        </div>

        <h3>Total Number of Users</h3>
        <h1>121</h1>
      </div>
      <div class="total_visits">
        <div>
          <span class="material-symbols-outlined"> tour </span>
        </div>
        <h3>Total Visits</h3>
        <h1>221</h1>
      </div>
      <div class="art_gallery">
        <div>
          <span class="material-symbols-outlined">
            network_intelligence
          </span>
        </div>
        <h3>Arts in Gallery</h3>
        <h1>21</h1>
      </div>
    </div>
    <div class="recent-uploads">
      <h2>Recent Uploads to Gallery</h2>
      <div class="recent-section">
        <div class="recent-card">
          <img src="./images/colorful.jpg" alt="img" />
          <h2>Colorful Design</h2>
          <div>
            <span class="material-symbols-outlined">
              keyboard_arrow_down
            </span>
          </div>
        </div>
        <div class="recent-card">
          <img src="./images/young-woman.jpg" alt="img" />
          <h2>Black painting woman</h2>
          <div>
            <span class="material-symbols-outlined">
              keyboard_arrow_down
            </span>
          </div>
        </div>
        <div class="recent-card">
          <img src="./images/black-paint.jpg" alt="img" />
          <h2>Black painting</h2>
          <div>
            <span class="material-symbols-outlined">
              keyboard_arrow_down
            </span>
          </div>
        </div>
        <div class="recent-card">
          <img src="./images/lion.jpg" alt="img" />
          <h2>Lion Design</h2>
          <div>
            <span class="material-symbols-outlined">
              keyboard_arrow_down
            </span>
          </div>
        </div>
        <div class="recent-card">
          <img src="./images/black-paint.jpg" alt="" />
          <h2>Black art</h2>
          <div>
            <span class="material-symbols-outlined">
              keyboard_arrow_down
            </span>
          </div>
        </div>

        <div class="recent-card">
          <img src="./images/colorful.jpg" alt="img" />
          <h2>Colorful art</h2>
          <div>
            <span class="material-symbols-outlined">
              keyboard_arrow_down
            </span>
          </div>
        </div>
      </div>
      <button class="orange-gradient">MORE</button class="red-gradient">
    </div>
    `;
  }
}
window.customElements.define("dashboard-component", Dashboard);
