class Patient_files{

  constructor(){
    this.id = ''
    this.patient_id = ''
    this.doctor_id = ''
    this.file_name = ''
    this.file_type = ''
    this.documents = ''
    this.created_at = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/patient_files.php?id=' + this.id + '&patient_id=' + this.patient_id + '&doctor_id=' + this.doctor_id + '&file_name=' + this.file_name + '&file_type=' + this.file_type + '&documents=' + this.documents + '&created_at=' + this.created_at + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/patient_files.php?id=' + this.id + '&patient_id=' + this.patient_id + '&doctor_id=' + this.doctor_id + '&file_name=' + this.file_name + '&file_type=' + this.file_type + '&documents=' + this.documents + '&created_at=' + this.created_at + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/patient_files.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/patient_files.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/patient_files.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/patient_files.php?getById=' + this.id)); }catch(err){}}
  async getByPatient_id(){ try{ eval(await this.request('controller/patient_files.php?getByPatient_id=' + this.patient_id)); }catch(err){}}
  async getByDoctor_id(){ try{ eval(await this.request('controller/patient_files.php?getByDoctor_id=' + this.doctor_id)); }catch(err){}}
  async getByFile_name(){ try{ eval(await this.request('controller/patient_files.php?getByFile_name=' + this.file_name)); }catch(err){}}
  async getByFile_type(){ try{ eval(await this.request('controller/patient_files.php?getByFile_type=' + this.file_type)); }catch(err){}}
  async getByDocuments(){ try{ eval(await this.request('controller/patient_files.php?getByDocuments=' + this.documents)); }catch(err){}}
  async getByCreated_at(){ try{ eval(await this.request('controller/patient_files.php?getByCreated_at=' + this.created_at)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/patient_files.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/patient_files.php?id=' + this.id + '&patient_id=' + this.patient_id + '&doctor_id=' + this.doctor_id + '&file_name=' + this.file_name + '&file_type=' + this.file_type + '&documents=' + this.documents + '&created_at=' + this.created_at + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/patient_files.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/patient_files.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/patient_files.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setPatient_id(patient_id){ this.patient_id = patient_id; }
  setDoctor_id(doctor_id){ this.doctor_id = doctor_id; }
  setFile_name(file_name){ this.file_name = file_name; }
  setFile_type(file_type){ this.file_type = file_type; }
  setDocuments(documents){ this.documents = documents; }
  setCreated_at(created_at){ this.created_at = created_at; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getPatient_id(){ return this.patient_id; }
  getDoctor_id(){ return this.doctor_id; }
  getFile_name(){ return this.file_name; }
  getFile_type(){ return this.file_type; }
  getDocuments(){ return this.documents; }
  getCreated_at(){ return this.created_at; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/patient_files.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
