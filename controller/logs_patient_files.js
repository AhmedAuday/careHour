class Logs_patient_files{

  constructor(){
    this.id = ''
    this.actionn = ''
    this.new_patient_id = ''
    this.new_doctor_id = ''
    this.new_file_name = ''
    this.new_file_type = ''
    this.new_file_path = ''
    this.new_created_at = ''
    this.logs_cdate = ''
    this.logs_ctime = ''
    this.log_ByUser = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/logs_patient_files.php?id=' + this.id + '&actionn=' + this.actionn + '&new_patient_id=' + this.new_patient_id + '&new_doctor_id=' + this.new_doctor_id + '&new_file_name=' + this.new_file_name + '&new_file_type=' + this.new_file_type + '&new_file_path=' + this.new_file_path + '&new_created_at=' + this.new_created_at + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/logs_patient_files.php?id=' + this.id + '&actionn=' + this.actionn + '&new_patient_id=' + this.new_patient_id + '&new_doctor_id=' + this.new_doctor_id + '&new_file_name=' + this.new_file_name + '&new_file_type=' + this.new_file_type + '&new_file_path=' + this.new_file_path + '&new_created_at=' + this.new_created_at + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/logs_patient_files.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/logs_patient_files.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/logs_patient_files.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/logs_patient_files.php?getById=' + this.id)); }catch(err){}}
  async getByActionn(){ try{ eval(await this.request('controller/logs_patient_files.php?getByActionn=' + this.actionn)); }catch(err){}}
  async getByNew_patient_id(){ try{ eval(await this.request('controller/logs_patient_files.php?getByNew_patient_id=' + this.new_patient_id)); }catch(err){}}
  async getByNew_doctor_id(){ try{ eval(await this.request('controller/logs_patient_files.php?getByNew_doctor_id=' + this.new_doctor_id)); }catch(err){}}
  async getByNew_file_name(){ try{ eval(await this.request('controller/logs_patient_files.php?getByNew_file_name=' + this.new_file_name)); }catch(err){}}
  async getByNew_file_type(){ try{ eval(await this.request('controller/logs_patient_files.php?getByNew_file_type=' + this.new_file_type)); }catch(err){}}
  async getByNew_file_path(){ try{ eval(await this.request('controller/logs_patient_files.php?getByNew_file_path=' + this.new_file_path)); }catch(err){}}
  async getByNew_created_at(){ try{ eval(await this.request('controller/logs_patient_files.php?getByNew_created_at=' + this.new_created_at)); }catch(err){}}
  async getByLogs_cdate(){ try{ eval(await this.request('controller/logs_patient_files.php?getByLogs_cdate=' + this.logs_cdate)); }catch(err){}}
  async getByLogs_ctime(){ try{ eval(await this.request('controller/logs_patient_files.php?getByLogs_ctime=' + this.logs_ctime)); }catch(err){}}
  async getByLog_ByUser(){ try{ eval(await this.request('controller/logs_patient_files.php?getByLog_ByUser=' + this.log_ByUser)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/logs_patient_files.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/logs_patient_files.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/logs_patient_files.php?id=' + this.id + '&actionn=' + this.actionn + '&new_patient_id=' + this.new_patient_id + '&new_doctor_id=' + this.new_doctor_id + '&new_file_name=' + this.new_file_name + '&new_file_type=' + this.new_file_type + '&new_file_path=' + this.new_file_path + '&new_created_at=' + this.new_created_at + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/logs_patient_files.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/logs_patient_files.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/logs_patient_files.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setActionn(actionn){ this.actionn = actionn; }
  setNew_patient_id(new_patient_id){ this.new_patient_id = new_patient_id; }
  setNew_doctor_id(new_doctor_id){ this.new_doctor_id = new_doctor_id; }
  setNew_file_name(new_file_name){ this.new_file_name = new_file_name; }
  setNew_file_type(new_file_type){ this.new_file_type = new_file_type; }
  setNew_file_path(new_file_path){ this.new_file_path = new_file_path; }
  setNew_created_at(new_created_at){ this.new_created_at = new_created_at; }
  setLogs_cdate(logs_cdate){ this.logs_cdate = logs_cdate; }
  setLogs_ctime(logs_ctime){ this.logs_ctime = logs_ctime; }
  setLog_ByUser(log_ByUser){ this.log_ByUser = log_ByUser; }
  setTimee(timee){ this.timee = timee; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getActionn(){ return this.actionn; }
  getNew_patient_id(){ return this.new_patient_id; }
  getNew_doctor_id(){ return this.new_doctor_id; }
  getNew_file_name(){ return this.new_file_name; }
  getNew_file_type(){ return this.new_file_type; }
  getNew_file_path(){ return this.new_file_path; }
  getNew_created_at(){ return this.new_created_at; }
  getLogs_cdate(){ return this.logs_cdate; }
  getLogs_ctime(){ return this.logs_ctime; }
  getLog_ByUser(){ return this.log_ByUser; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/logs_patient_files.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
