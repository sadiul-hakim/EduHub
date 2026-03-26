import { useForm } from "@inertiajs/react";

export default function Header({ toggleSidebar, serverProps }) {
    const { post } = useForm();

    function handleLogout(e) {
        post('/logout');
    }

    return (

        <header className="bg-white border-bottom p-3 d-flex align-items-center justify-content-between">

            <div className="d-flex align-items-center">
                <button
                    className="btn btn-outline-secondary me-3"
                    onClick={toggleSidebar}
                    id="toggle-button"
                >
                    ☰
                </button>

                <h5 className="mb-0">Dashboard</h5>
            </div>
            <div>
                <a><i className="bi bi-person-circle text-primary"></i> {serverProps.auth.user ? serverProps.auth.user.name : 'Action'}</a>
                <a className="ms-2 btn" style={{ cursor: 'pointer' }} onClick={handleLogout}><i class="bi bi-power text-danger"></i> Logout</a>
            </div>

        </header>

    );

}