import styles from "../style/projectDetails.module.css";
import { NavLink } from "react-router-dom";

export default function Navbar() {
  return (
    <nav
      className={`navbar navbar-expand-lg navbar-dark bg-dark d-flex align-items-center ${styles.navbar}`}
    >
      <div className="container-fluid d-flex align-items-center">
        <h3 className="mb-0">
          <NavLink className="nav-link text-white" to="/">
            Progetti
          </NavLink>
        </h3>
      </div>
    </nav>
  );
}
