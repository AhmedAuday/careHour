class Logs_disabilities{

  constructor(){
    this.id = ''
    this.actionn = ''
    this.new_patient_id = ''
    this.new_disability_name = ''
    this.new_onset_date = ''
    this.new_notes = ''
    this.logs_cdate = ''
    this.logs_ctime = ''
    this.log_ByUser = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/logs_disabilities.php?id=' + this.id + '&actionn=' + this.actionn + '&new_patient_id=' + this.new_patient_id + '&new_disability_name=' + this.new_disability_name + '&new_onset_date=' + this.new_onset_date + '&new_notes=' + this.new_notes + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/logs_disabilities.php?id=' + this.id + '&actionn=' + this.actionn + '&new_patient_id=' + this.new_patient_id + '&new_disability_name=' + this.new_disability_name + '&new_onset_date=' + this.new_onset_date + '&new_notes=' + this.new_notes + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/logs_disabilities.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/logs_disabilities.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/logs_disabilities.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/logs_disabilities.php?getById=' + this.id)); }catch(err){}}
  async getByActionn(){ try{ eval(await this.request('controller/logs_disabilities.php?getByActionn=' + this.actionn)); }catch(err){}}
  async getByNew_patient_id(){ try{ eval(await this.request('controller/logs_disabilities.php?getByNew_patient_id=' + this.new_patient_id)); }catch(err){}}
  async getByNew_disability_name(){ try{ eval(await this.request('controller/logs_disabilities.php?getByNew_disability_name=' + this.new_disability_name)); }catch(err){}}
  async getByNew_onset_date(){ try{ eval(await this.request('controller/logs_disabilities.php?getByNew_onset_date=' + this.new_onset_date)); }catch(err){}}
  async getByNew_notes(){ try{ eval(await this.request('controller/logs_disabilities.php?getByNew_notes=' + this.new_notes)); }catch(err){}}
  async getByLogs_cdate(){ try{ eval(await this.request('controller/logs_disabilities.php?getByLogs_cdate=' + this.logs_cdate)); }catch(err){}}
  async getByLogs_ctime(){ try{ eval(await this.request('controller/logs_disabilities.php?getByLogs_ctime=' + this.logs_ctime)); }catch(err){}}
  async getByLog_ByUser(){ try{ eval(await this.request('controller/logs_disabilities.php?getByLog_ByUser=' + this.log_ByUser)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/logs_disabilities.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/logs_disabilities.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/logs_disabilities.php?id=' + this.id + '&actionn=' + this.actionn + '&new_patient_id=' + this.new_patient_id + '&new_disability_name=' + this.new_disability_name + '&new_onset_date=' + this.new_onset_date + '&new_notes=' + this.new_notes + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/logs_disabilities.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/logs_disabilities.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/logs_disabilities.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setActionn(actionn){ this.actionn = actionn; }
  setNew_patient_id(new_patient_id){ this.new_patient_id = new_patient_id; }
  setNew_disability_name(new_disability_name){ this.new_disability_name = new_disability_name; }
  setNew_onset_date(new_onset_date){ this.new_onset_date = new_onset_date; }
  setNew_notes(new_notes){ this.new_notes = new_notes; }
  setLogs_cdate(logs_cdate){ this.logs_cdate = logs_cdate; }
  setLogs_ctime(logs_ctime){ this.logs_ctime = logs_ctime; }
  setLog_ByUser(log_ByUser){ this.log_ByUser = log_ByUser; }
  setTimee(timee){ this.timee = timee; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getActionn(){ return this.actionn; }
  getNew_patient_id(){ return this.new_patient_id; }
  getNew_disability_name(){ return this.new_disability_name; }
  getNew_onset_date(){ return this.new_onset_date; }
  getNew_notes(){ return this.new_notes; }
  getLogs_cdate(){ return this.logs_cdate; }
  getLogs_ctime(){ return this.logs_ctime; }
  getLog_ByUser(){ return this.log_ByUser; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/logs_disabilities.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
