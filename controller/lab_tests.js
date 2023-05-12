class Lab_tests{

  constructor(){
    this.id = ''
    this.doctor_id = ''
    this.patient_id = ''
    this.test_name = ''
    this.test_results = ''
    this.test_date = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/lab_tests.php?id=' + this.id + '&doctor_id=' + this.doctor_id + '&patient_id=' + this.patient_id + '&test_name=' + this.test_name + '&test_results=' + this.test_results + '&test_date=' + this.test_date + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/lab_tests.php?id=' + this.id + '&doctor_id=' + this.doctor_id + '&patient_id=' + this.patient_id + '&test_name=' + this.test_name + '&test_results=' + this.test_results + '&test_date=' + this.test_date + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/lab_tests.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/lab_tests.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/lab_tests.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/lab_tests.php?getById=' + this.id)); }catch(err){}}
  async getByDoctor_id(){ try{ eval(await this.request('controller/lab_tests.php?getByDoctor_id=' + this.doctor_id)); }catch(err){}}
  async getByPatient_id(){ try{ eval(await this.request('controller/lab_tests.php?getByPatient_id=' + this.patient_id)); }catch(err){}}
  async getByTest_name(){ try{ eval(await this.request('controller/lab_tests.php?getByTest_name=' + this.test_name)); }catch(err){}}
  async getByTest_results(){ try{ eval(await this.request('controller/lab_tests.php?getByTest_results=' + this.test_results)); }catch(err){}}
  async getByTest_date(){ try{ eval(await this.request('controller/lab_tests.php?getByTest_date=' + this.test_date)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/lab_tests.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/lab_tests.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/lab_tests.php?id=' + this.id + '&doctor_id=' + this.doctor_id + '&patient_id=' + this.patient_id + '&test_name=' + this.test_name + '&test_results=' + this.test_results + '&test_date=' + this.test_date + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/lab_tests.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/lab_tests.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/lab_tests.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setDoctor_id(doctor_id){ this.doctor_id = doctor_id; }
  setPatient_id(patient_id){ this.patient_id = patient_id; }
  setTest_name(test_name){ this.test_name = test_name; }
  setTest_results(test_results){ this.test_results = test_results; }
  setTest_date(test_date){ this.test_date = test_date; }
  setTimee(timee){ this.timee = timee; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getDoctor_id(){ return this.doctor_id; }
  getPatient_id(){ return this.patient_id; }
  getTest_name(){ return this.test_name; }
  getTest_results(){ return this.test_results; }
  getTest_date(){ return this.test_date; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/lab_tests.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
