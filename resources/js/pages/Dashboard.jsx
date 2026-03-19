import Layout from '../component/Layout';

const Dashboard = function Dashboard() {

  return (
    <>
    Dashboard Content Here
    </>
  );
}

Dashboard.layout = page => <Layout children={page}/>

export default Dashboard;