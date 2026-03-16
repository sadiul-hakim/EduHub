export default function Header({ toggleSidebar }) {

    return (

        <header className="bg-white border-bottom p-3 d-flex align-items-center">

            <button
                    className="btn btn-outline-secondary me-3"
                    onClick={toggleSidebar}
                    id="toggle-button"
                >
                    ☰
                </button>

            <h5 className="mb-0">Dashboard</h5>

        </header>

    );

}