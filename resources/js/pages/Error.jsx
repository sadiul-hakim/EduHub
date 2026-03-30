
export default function Error({ status }) {
    return (
        <main className="bg-light min-vh-100 d-flex justify-content-center align-items-center">
            <div className="container">
                <div className="row">
                    <div className="col-12 col-md-6 mx-auto text-center">
                        <img src="/images/error.svg" alt="error" width={350} height={300} />
                        <h2 className="text-danger">{status}</h2>
                        <a className="btn btn-primary" href="/">Home</a>
                    </div>
                </div>
            </div>
        </main>
    )
}
